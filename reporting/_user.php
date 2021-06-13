<?php

	$rsUser=&$db->Execute("select CONCAT(firstname,' ',lastname) as name, users.* from users");
    $smarty->assign('rsUser', $rsUser);

    $smarty->display('_user.tpl');
    
?>