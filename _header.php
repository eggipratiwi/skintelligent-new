<?php

    ob_start();	
    session_start();
 
    header('Access-Control-Allow-Origin: *');
    //error_reporting (E_ALL ^ E_NOTICE);
    error_reporting (0);


    define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/lib/smarty/');


    require_once(SMARTY_DIR . 'Smarty.class.php');
    $smarty = new Smarty();
    $smarty->debugging = false;

    include ('_database.php');

    // ============================== Variable Global Start Here ============================= //


    $base_url 	= 'https://skintelligent.id/';
    $img_url   = 'https://skintelligent.id/';  
	

    $smarty->assign('base_url', $base_url);
    $smarty->assign('img_url', $img_url); 

    date_default_timezone_set("Asia/Jakarta");

    $current_time = date("Y-m-d H:i:s");
 
?>