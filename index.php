<?php
    require_once('_header.php');
    session_start();
                
    $expl = explode("/", strtolower($_SERVER["REQUEST_URI"]));
    $flag =0;     

    $module = $_GET['module'];
    $url1   = $expl[$flag+2];
    $url2   = $expl[$flag+3];
    $url3   = $expl[$flag+4];
    $url4   = $expl[$flag+5];

    echo"on login branch homepage";
    
    if(!isset($module)) $module = $expl[$flag+1];
	
	
    if(!isset($module)) $module = '';
	
	
    $smarty->assign('module', $module);
    $smarty->assign('url1', $url1);
    $smarty->assign('url2', $url2);
    $smarty->assign('url3', $url3);
    $smarty->assign('url4', $url4); 

        
    if($module == 'home' or $module == '') {  
        include('_index.php');

    }else if($module == 'result') {
       include('_result.php');

    }else if($module == 'ajax') {
       include('ajax.php');

    }else if($module == 'logout') {
       session_destroy();
       include('_index.php');

    }else if($module == 'info') {
        phpinfo();

    }else{
        
        $smarty->display('_404.tpl');
    }


?>