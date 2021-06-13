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
$table = 'member_mstr';

// Table's primary key
$primaryKey = 'member_mstrID';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'member_MemberCd', 'dt' => 1 ),
    array(
        'db'        => 'member_FromDate',
        'dt'        => 2,
        'formatter' => function( $d, $row ) {
            return date( 'j M Y', strtotime($d));
        }
    ),
    // array( 'db' => 'member_FromDate',  'dt' => 1 ),
    array(
        'db'        => 'member_ToDate',
        'dt'        => 3,
        'formatter' => function( $d, $row ) {
            return date( 'j M Y', strtotime($d));
        }
    ),
    // array( 'db' => 'member_ToDate',   'dt' => 2 ),
    array( 'db' => 'member_nama',     'dt' => 4 ),
    array( 'db' => 'member_email',     'dt' => 5 ),
    array( 'db' => 'member_Whatsapp',     'dt' => 6 ),
    array(
        'db'        => 'member_tgl_lahir',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return date( 'j M Y', strtotime($d));
        }
    )
    // array( 'db' => 'member_tgl_lahir',     'dt' => 6 )
    // array(
    //     'db'        => 'start_date',
    //     'dt'        => 4,
    //     'formatter' => function( $d, $row ) {
    //         return date( 'jS M y', strtotime($d));
    //     }
    // ),
    // array(
    //     'db'        => 'salary',
    //     'dt'        => 5,
    //     'formatter' => function( $d, $row ) {
    //         return '$'.number_format($d);
    //     }
    // )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'BNB_view',
    'pass' => 'M@$t312BnbDB',
    'db'   => 'BNB',
    'host' => 'vrimas.ddns.net:3376'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'vendor/ssp.class.php' );
 if(isset($_GET['flag'])){ 
 	if($_GET['flag'] == 'non-active'){
 		$filter = "member_ToDate < SUBSTR(NOW(), 1, 10)";
 	}else{
 		$filter = "member__dihapus = 'No' AND member_ToDate >= SUBSTR(NOW(), 1, 10)";
 	}
 }
// echo json_encode(
    $result = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null, $filter);
// );
    $start=$_REQUEST['start']+1;
    $idx=0;
    foreach($result['data'] as &$res){
        $res[0]=(string)$start;
        $start++;
        $idx++;
    }
     echo json_encode($result);









	// mysql_connect("vrimas.ddns.net:3376","BNB_view","M@$t312BnbDB");
	// mysql_select_db("BNB");

	// $query = "
	// SELECT `member_MemberCd`,
	// 			`member_FromDate`, 
	// 			`member_ToDate`, 
	// 			`member_tgl_lahir`, 
	// 			`member_Whatsapp`, 
	// 			`member_email`, 
	// 			`member_nama`
	// 		FROM 
	// 			`member_mstr`
	// 		LIMIT 12
	// ";

	// $exe = mysql_query($query);
	// $array = array();
	// while ($row = mysql_fetch_array($exe, MYSQL_ASSOC)) {
	// 	array_push($array, $row);
	// }

	// $ready = array('data' => $array);

	// $json = json_encode($ready	);
	// echo $json;

	// storing  request (ie, get/post) global array to a variable  
	// $requestData= $_REQUEST;

	// $columns = array( 
	// // datatable column index  => database column name
	// 	0 => 'no',
	// 	1 => 'member_TempMemberCd', 
	// 	2 => 'member_FromDate',
	// 	3 => 'member_ToDate',
	// 	4 => 'member_nama',
	// 	5 => 'member_email',
	// 	6 => 'member_Whatsapp',
	// 	7 => 'member_tgl_lahir'	
	// );
	

	 	//$db2->debug = true;

	// 	if($url2 == 'non-active'){
	// 		$filter = "WHERE member_ToDate < SUBSTR(NOW(), 1, 10)";
	// 	}else{
	// 		$filter = "WHERE member__dihapus = 'No' AND member_ToDate >= SUBSTR(NOW(), 1, 10)";
	// 	}

		// $rsMembers = &$db2->Execute("
		// 	SELECT `member_MemberCd`, 
		// 		`member_TempMemberCd`, 	
		// 		`member_FromDate`, 
		// 		`member_ToDate`, 
		// 		`member_MemberTypeCd`, 	
		// 		`member_PointReward`, 
		// 		`member_RedeemPoint`, 
		// 		`member_LastTransDate`, 	
		// 		`member_LastTansAmount`, 
		// 		`member_SF_Member`, 
		// 		`member_Deleteable`, 
		// 		`member_Forensic`, 
		// 		`member_PortfolioCd`, 
		// 		`member_Sub_PortfolioCd`, 
		// 		`member_contact_mstrID`, 
		// 		`member_membert_typeID`, 
		// 		`member__dihapus`, 
		// 		`member__dihapus_time`, 
		// 		`member_loc_mstrID`, 
		// 		`member_LocationCd`, 
		// 		`member_LocPickCardloc_mstrID`, 
		// 		`member_LocPickCardLocationCd`, 
		// 		`member_tgl_lahir`, 
		// 		`member_Whatsapp`, 
		// 		`member_email`, 
		// 		`member_nama`
		// 	FROM 
		// 		`member_mstr` ".$filter."
		// 	LIMIT 12
		// ");
		// print_r($rsMembers);
	// 	echo json_encode($rsMembers);
		// $smarty->assign('rsMembers', $rsMembers);

  //   $smarty->display('_members.tpl');
?>