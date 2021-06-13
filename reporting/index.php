<?php
    require_once('_header.php');
    
    session_start();
                
    $expl = explode("/", strtolower($_SERVER["REQUEST_URI"]));
    $flag =1; 
    
    $r_uri = $_SERVER["REQUEST_URI"];

    $module = $_GET['module'];
    $url1   = $expl[$flag+2];
    $url2   = $expl[$flag+3];
    $url3   = $expl[$flag+4];
    $url4   = $expl[$flag+5];


    if(!isset($module)) $module = $expl[$flag+1];
    
    
    if(!isset($module)) $module = '';
    
    $smarty->assign('r_uri', $r_uri);
    $smarty->assign('module', $module);
    $smarty->assign('url1', $url1);
    $smarty->assign('url2', $url2);
    $smarty->assign('url3', $url3);
    $smarty->assign('url4', $url4); 


    if($module == 'home' or $module == '') {  
        include('_index.php');

    }else if($module == 'login') {   
        include('_login.php');

    }else if($module == 'logout') {   
        include('_logout.php');

    }else if($module == 'profile') {   
        include('_profile.php');

    }else if($module == 'master-data') {  

        if($url1 == 'concerns'){
            include('_concerns.php');

        }else if($url1 == 'questions'){
            include('_questions.php');

        }else if($url1 == 'options'){
            include('_options.php');

        }else if($url1 == 'score'){
            include('_score.php');

        } 

    }else if($module == 'correspondent') {   
        include('_correspondent.php');

    }else if($module == 'survey-report') {  
        if($url1 == 'list'){
            include('_survey-report-list.php');
        }elseif($url1 == 'graphic'){
            include('_survey-report-graphic.php');
        }

    }else if($module == 'users') { 
        if($url2 == 'add' or $url2 =='edit' or $url2 =='delete'){
            include('_user-form.php');
        } else { 
            include('_user.php');
        }
    }else{
        
        $smarty->display('_404.tpl');
    }
    
?>