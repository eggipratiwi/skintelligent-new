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

    function isPage($uri, $pageName) {
    if(strlen(strchr($uri, $pageName)) == 0) {
            return false;
        } else {
            return true;
        }
    }

    // ============================== Variable Global Start Here ============================= //


    $base_url   = 'https://skintelligent.id/reporting/';
    $img_url   = 'https://skintelligent.id/';  
    

    $smarty->assign('base_url', $base_url);
    $smarty->assign('img_url', $img_url); 

    date_default_timezone_set("Asia/Jakarta");

    $current_time = date("Y-m-d H:i:s");

    $uri = strtolower($_SERVER["REQUEST_URI"]);

    if(!isPage($uri, 'login'))
    {
        if(!isset($_SESSION['sys_email'])) {
            header('location:login');
        } else {
            $smarty->assign('sys_user_id', $_SESSION['sys_user_id']);
            $smarty->assign('sys_email', $_SESSION['sys_email']);
            $smarty->assign('sys_position', $_SESSION['sys_position']);
            $smarty->assign('sys_firstname', $_SESSION['sys_firstname']);
            $smarty->assign('sys_lastname', $_SESSION['sys_lastname']);
            $smarty->assign('sys_image', $_SESSION['sys_image']);
        }
    }else if(isPage($uri, 'login') && isset($_SESSION['sys_email'])){
        header('location:home');
    }
 
?>