<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$url1 = $_GET['url1'];
$url2 = $_GET['url2'];
$url3 = $_GET['url3'];
$url4 = $_GET['url4'];

$r_url3 = str_replace('-', ' ', $url3);
if($url2 == 'brands'){
	if($url1 == 'best-selling' or $url1 == 'all-product' or $url1 == 'sold-product'){
		$filter = "c.name = '".$r_url3."'";
	}else{
		$filter = "c.name = '".$r_url3."'";
	}
}elseif($url2 == 'platform'){
	if($url4 == 'last-month'){
		$filter = "order_method = '".$r_url3."' and th.status NOT IN ('expired','cenceled') AND SUBSTR(tgl_invoice, 6,2) = SUBSTR(NOW(), 6,2)";
	}else{
		$filter = "order_method = '".$r_url3."' and th.status NOT IN ('expired','cenceled')";
	}
}

if($url2 == 'brands' or $url2 == 'platform'){
	if($url1 == 'uploaded' or $url1 == 'available' or $url1 == 'non-available'){
		$filterfinal = " AND ".$filter;
	}else{
		$filterfinal = " WHERE ".$filter;
	}
}

if($url1 == 'uploaded'){
$table = <<<EOT
 (
	SELECT
	a.Barcode,
	a.name,
	a.color,
	a.price,
	c.name AS brands,
	a.qty 
FROM
	product a
	INNER JOIN `product_thumb` b ON a.`product_code` = b.`product_code` 
	AND a.`color` = b.`color`
	INNER JOIN brands c ON a.`brandsid` = c.`brandsid` 
WHERE
	a.`is_active` = '1' $filterfinal
GROUP BY
	a.Barcode
 ) temp
EOT;
	}elseif($url1 == 'available'){
$table = <<<EOT
 (
	SELECT
	a.Barcode,
	a.name,
	a.color,
	a.price,
	c.name AS brands,
	a.qty 
FROM
	product a
	LEFT JOIN brands c ON a.`brandsid` = c.`brandsid` 
WHERE
	a.qty > 0 $filterfinal
 ) temp
EOT;
	}elseif($url1 == 'non-available'){
$table = <<<EOT
 (
	SELECT
	a.Barcode,
	a.name,
	a.color,
	a.price,
	c.name AS brands,
	a.qty 
FROM
	product a
	LEFT JOIN brands c ON a.`brandsid` = c.`brandsid` 
WHERE
	a.qty < 1 $filterfinal
 ) temp
EOT;
	}elseif($url1 == 'best-selling' or $url1 == 'sold-product'){
$table = <<<EOT
 (
	SELECT
	a.Barcode,
	a.name,
	a.color,
	a.price,
	c.name AS brands,
	a.qty,
	SUM( td.qty ) AS jml_sales,
	th.order_method,
	th.status,
	th.tgl_invoice
FROM
	tr_header th
	INNER JOIN `tr_detail` td ON th.`tr_header_id` = td.`tr_header_id`
	INNER JOIN product a ON td.`product_id` = a.`product_id`
	LEFT JOIN brands c ON a.`brandsid` = c.`brandsid` 
	$filterfinal
GROUP BY
	Barcode 
ORDER BY
	SUM( td.qty ) DESC
 ) temp
EOT;
	}else{
$table = <<<EOT
 (
SELECT
	a.*,
	c.name AS brand 
FROM
	product a
	INNER JOIN brands c ON a.`brandsid` = c.`brandsid` 
	$filterfinal
GROUP BY
	a.Barcode
 ) temp
EOT;
	}

// Table's primary key
$primaryKey = 'Barcode';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
if($url1 == 'best-selling' or $url1 == 'sold-product'){
	$columns = array(
	    array( 'db' => 'Barcode', 'dt' => 1 ),
	    array( 'db' => 'name', 'dt' => 2 ),
	    array( 'db' => 'color', 'dt' => 3 ),
	    array( 'db' => 'price', 'dt' => 4 ),
	    array( 'db' => 'brands', 'dt' => 5 ),
	    array( 'db' => 'qty', 'dt' => 6 ),
	    array( 'db' => 'jml_sales', 'dt' => 7 ),
	);
}else{
	$columns = array(
	    array( 'db' => 'Barcode', 'dt' => 1 ),
	    array( 'db' => 'name', 'dt' => 2 ),
	    array( 'db' => 'color', 'dt' => 3 ),
	    array(
	        'db'        => 'price',
	        'dt'        => 4,
	        'formatter' => function( $d, $row ) {
	            return number_format($d,0,",",".");
	        }
	    ),
	    // array( 'db' => 'price', 'dt' => 4 ),
	    array( 'db' => 'brands', 'dt' => 5 ),
	    array( 'db' => 'qty', 'dt' => 6 ),
	);
}

 
// SQL server connection information
$sql_details = array(
    'user' => 'bnbweb_root',
    'pass' => 'bird5N8335Db',
    'db'   => 'bnbweb_db',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'vendor/ssp.class.php' );
// echo json_encode(
    $result = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null, null);
// );
    $start=$_REQUEST['start']+1;
    $idx=0;
    foreach($result['data'] as &$res){
        $res[0]=(string)$start;
        $start++;
        $idx++;
    }
     echo json_encode($result);
?> 