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
    array( 'db' => 'phone', 'dt' => 4 ),
    array( 'db' => 'email', 'dt' => 5 ),
    array( 'db' => 'profession', 'dt' => 6 ),
    array( 'db' => 'nama_provinsi', 'dt' => 7 ),
    array( 'db' => 'nama_kota', 'dt' => 8 ),
    array( 'db' => 'nama_kecamatan', 'dt' => 9 ),

);


switch ($_REQUEST['flag']) {
    case 'finish':
        $table = <<<EOT
         (
            SELECT CONCAT(a.first_name,' ',a.last_name) as name, a.*, b.nama_provinsi, c.nama_kota, d.nama_kecamatan, e.nama_kelurahan FROM register a 
                                INNER JOIN m_provinsi b ON a.id_provinsi = b.id_provinsi
                                INNER JOIN m_kota c ON a.id_kota = c.id_kota
                                INNER JOIN m_kecamatan d ON a.id_kecamatan = d.id_kecamatan
                                INNER JOIN m_kelurahan e ON a.id_kelurahan = e.id_kelurahan
                                INNER JOIN tr_header tr1 on a.id_register = tr1.id_register
                                ORDER BY a.create_date desc
         ) temp
EOT;
        break;

    case 'pending':
        $table = <<<EOT
         (
            SELECT CONCAT(a.first_name,' ',a.last_name) as name, a.*, b.nama_provinsi, c.nama_kota, d.nama_kecamatan FROM register a 
                                INNER JOIN m_provinsi b ON a.id_provinsi = b.id_provinsi
                                INNER JOIN m_kota c ON a.id_kota = c.id_kota
                                INNER JOIN m_kecamatan d ON a.id_kecamatan = d.id_kecamatan
                                WHERE a.id_register NOT IN (select id_register from tr_header) 
                                ORDER BY a.create_date desc
         ) temp
EOT;
        break;
    
    default:
        $table = <<<EOT
         (
            SELECT CONCAT(a.first_name,' ',a.last_name) as name, a.*, b.nama_provinsi, c.nama_kota, d.nama_kecamatan FROM register a 
                                INNER JOIN m_provinsi b ON a.id_provinsi = b.id_provinsi
                                INNER JOIN m_kota c ON a.id_kota = c.id_kota
                                INNER JOIN m_kecamatan d ON a.id_kecamatan = d.id_kecamatan
                                ORDER BY a.create_date desc
         ) temp
EOT;
        break;
}

 

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