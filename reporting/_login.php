<?php
	require_once('_header.php');
	require_once('_database.php');
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(isset($email))
	{
		if(!empty($email) && !empty($password))
		{
			$rs = &$db->Execute('select * from users where email = ? AND password = ? AND activation = ?', array((string)$email, sha1($password),'1'));
			if(!$rs->EOF)
			{
					$_SESSION['sys_user_id'] = $rs->fields['user_id'];
					$_SESSION['sys_email'] = $rs->fields['email'];
					$_SESSION['sys_position'] = $rs->fields['position'];
					$_SESSION['sys_firstname'] = $rs->fields['firstname'];
					$_SESSION['sys_lastname'] = $rs->fields['lastname'];
					$_SESSION['sys_image'] = $rs->fields['image'];

					header('location:home');

			}
			else
			{
				$smarty->assign('errorMessage', 'Incorrect username or password. Please try again.');
			}
			
			
		}
		else
		{
			$smarty->assign('errorMessage', 'Email or password is required.');
		}
	}

	$smarty->display('_login.tpl');
	
?>