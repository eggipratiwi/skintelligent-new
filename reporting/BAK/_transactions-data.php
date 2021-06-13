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
$table = 'tr_header'; 

// // Table's primary key
$primaryKey = 'tr_header_id';
 
// // Array of database columns which should be read and sent back to DataTables.
// // The `db` parameter represents the column name in the database, while the `dt`
// // parameter represents the DataTables column identifier. In this case simple
// // indexes
$columns = array(
    array(
        'db'        => 'tgl_invoice',
        'dt'        => 1,
        'formatter' => function( $d, $row ) {
            return date( 'j M Y', strtotime($d));
        }
    ),
    array( 'db' => 'no_invoice', 'dt' => 2 ),
    array( 'db' => 'da_firstname',     'dt' => 3 ),
    array( 'db' => 'payment_methode',     'dt' => 4 ),
    array( 'db' => 'tipe_shipping',     'dt' => 5 ),
    array(
        'db'        => 'total',
        'dt'        => 6,
        'formatter' => function( $d, $row ) {
            return number_format($d,0,",","");
        }
    ),
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'bnbweb_root',
    'pass' => 'bird5N8335Db',
    'db'   => 'bnbweb_db',
    'host' => 'localhost'
);


if(isset($_GET['url2'])){
	if($_GET['url2'] == 'brands'){
		
		$columns = array(
		    array(
		        'db'        => 'tgl_invoice',
		        'dt'        => 1,
		        'formatter' => function( $d, $row ) {
		            return date( 'j M Y', strtotime($d));
		        }
		    ),
		    array( 'db' => 'no_invoice', 'dt' => 2 ), 
		    array( 'db' => 'order_method',     'dt' => 3 ),
		    array( 'db' => 'Barcode',     'dt' => 4 ),
		    array( 'db' => 'name',     'dt' => 5 ),
		    array( 'db' => 'qty',     'dt' => 6 ),
		    array(
		        'db'        => 'price',
		        'dt'        => 7,
		        'formatter' => function( $d, $row ) {
		            return number_format($d,0,",","");
		        }
		    ),
		    array( 'db' => 'brand',     'dt' => 8 ),
		);


$table = <<<EOT
 (
SELECT
	d.NAME AS brand,
	a.tr_header_id,
	a.no_invoice,
	a.tgl_invoice,
	a.da_firstname,
	a.payment_methode,
	a.tipe_shipping,
	a.total,
	a.order_method,
	a.STATUS,
	c.`Barcode`,
	c.`name`,
	c.`color`,
	c.`size`,
	b.qty,
	b.price 
FROM
	tr_header a
	INNER JOIN ( SELECT product_id, tr_header_id, qty, price FROM tr_detail ) b ON a.`tr_header_id` = b.`tr_header_id`
	INNER JOIN product c ON b.`product_id` = c.`product_id`
	LEFT JOIN brands d ON c.`brandsid` = d.`brandsid`
 ) temp
EOT;
	}
}
 
 
// /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
//  * If you just want to use the basic configuration for DataTables with PHP
//  * server-side, there is no need to edit below this line.
//  */
 
require( 'vendor/ssp.class.php' );
if(isset($_GET['url2'])){
	if($_GET['url2'] == 'order-method'){
		$addfilter = " AND order_method = '".$_GET['url3']."'";
	}elseif($_GET['url2'] == 'payment-method'){
		$addfilter = " AND payment_methode = '".$_GET['url3']."'";
	}elseif($_GET['url2'] == 'brands' AND $_GET['url3'] != 'all-brand'){
		$r_url3 = str_replace('-', ' ', $_GET['url3']);
		$addfilter = " AND brand = '".$r_url3."'";
	}
}

if(isset($_GET['url1'])){ 
	if($_GET['url1'] == 'pending'){
		$filter = "status = 'pending'".$addfilter;

	}elseif($_GET['url1'] == 'processing'){
		$filter = "(status = 'processing' or status = 'shipped' or status = 'confirmed')".$addfilter;

	}elseif($_GET['url1'] == 'expired'){
		$filter = "(status = 'expired' or status = 'canceled')".$addfilter;

	}else{
		$filter = "1=1".$addfilter;
	}
}
// echo $filter;
$result = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null, $filter);
$start=$_REQUEST['start']+1;
$idx=0;
foreach($result['data'] as &$res){
    $res[0]=(string)$start;
    $start++;
    $idx++;
}

 echo json_encode($result);
?>