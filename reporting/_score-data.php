<?php

include ('_database.php');

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

 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'title', 'dt' => 1 ),
    array( 'db' => 'description', 'dt' => 2 ),
    array( 'db' => 'min_skor', 'dt' => 3 ),
    array( 'db' => 'max_skor', 'dt' => 4 )

);

$table = <<<EOT
 (
	SELECT
	a.id_skor,
	c.title,
	a.description,
	a.min_skor,
	a.max_skor
FROM
	skors a
	INNER JOIN concerns c on a.id_concern = c.id_concern
ORDER BY
	c.id_concern asc
 ) temp
EOT;
 

 // Table's primary key
$primaryKey = 'id_skor';

 
 
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