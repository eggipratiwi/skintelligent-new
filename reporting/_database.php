<?php
	error_reporting (0);
	require_once('lib/adodb5/adodb.inc.php');
	$db = &ADONewConnection('mysqli');


	//$db->debug = true;
	$db->Connect('localhost', 'skintell', 'M@$t312AYID2020', 'skintell_survey_db');

	global $sql_details; // koneksi untuk json data

	$sql_details = array(
	    'user' => 'skintell',
	    'pass' => 'M@$t312AYID2020',
	    'db'   => 'skintell_survey_db',
	    'host' => 'localhost'
	);

?>