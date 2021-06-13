<?php

	require_once('lib/adodb5/adodb.inc.php');
	$db = &ADONewConnection('mysqli');


	//$db->debug = true;
	$db->Connect('localhost', 'skintell', 'M@$t312AYID2020', 'skintell_survey_db');


?>