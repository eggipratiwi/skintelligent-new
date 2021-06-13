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
    array( 'db' => 'name', 'dt' => 1 ),
    array( 'db' => 'age', 'dt' => 2 ),
    array( 'db' => 'gender', 'dt' => 3 ),
    array( 'db' => 'title', 'dt' => 4 ),
    array( 'db' => 'skor', 'dt' => 5 )

);

$table = <<<EOT
 (
    select c.id_register,  CONCAT(c.first_name,' ',c.last_name) as name, c.age, c.gender, d.title, SUM(e.poin) as skor from tr_header a
    inner join tr_detail b on a.tr_header_id = b.tr_header_id
    inner join register c on b.id_register = c.id_register
    inner join concerns d on b.id_concern = d.id_concern
    inner join options e on b.id_option = e.id_option
    group by b.id_register,b.id_concern
 ) temp
EOT;


 

 // Table's primary key
$primaryKey = 'id_register';

 
 
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