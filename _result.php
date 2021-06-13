<?php
    if($_SESSION['email'] == ''){
        //header('Location: '.$base_url);
    }

    $id_register=&$db->Execute("select * from register where email = ? limit 1", array((string)$_SESSION['email']))->fields[0];

    $rsSurvey=&$db->Execute("SELECT tb1.*, tb2.description FROM (SELECT c.id_concern, c.title, SUM( d.poin ) AS skor FROM tr_detail a INNER JOIN register b ON a.id_register = b.id_register INNER JOIN concerns c ON a.id_concern = c.id_concern INNER JOIN options d ON a.id_option = d.id_option WHERE b.id_register = ? GROUP BY c.id_concern) tb1 inner join skors tb2 on tb1.id_concern = tb2.id_concern and tb2.min_skor <= tb1.skor and tb2.max_skor >= tb1.skor ORDER BY tb1.id_concern ASC", array((int)$id_register));


    $smarty->assign('rsSurvey', $rsSurvey);
    $smarty->assign('firstname', $_SESSION['firstname']);


    //session_destroy();

	$smarty->display('_result.tpl');
?>