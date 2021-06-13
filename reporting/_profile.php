<?php
	require_once('lib/phpthumb/ThumbLib.inc.php');

	//$db->debug = true;

	$rsUser = &$db->Execute("select * from users where email = ?", array((string)$_SESSION['sys_email']));
	$smarty->assign('firstname', $rsUser->fields['firstname']);
	$smarty->assign('lastname', $rsUser->fields['lastname']);
	$smarty->assign('email', $rsUser->fields['email']);
	$smarty->assign('username', $rsUser->fields['username']);
	$smarty->assign('password', '');
	$smarty->assign('password2', '');
	$smarty->assign('rules', $rsUser->fields['position']);
	$smarty->assign('activation', $rsUser->fields['activation']);
	$smarty->assign('image', $rsUser->fields['image']);

	if($url1 == 'update'){

		if(isset($_POST['save'])){

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$oldpassword = $_POST['oldpassword'];
			$newpassword = $_POST['newpassword'];
			$confirmpassword = $_POST['confirmpassword'];
			$image = $_POST['image'];

			$smarty->assign('firstname', $firstname);
			$smarty->assign('lastname', $lastname);
			$smarty->assign('oldpassword', $oldpassword);
			$smarty->assign('newpassword', $newpassword);
			$smarty->assign('confirmpassword', $confirmpassword);

			$passdb = &$db->Execute("select password from users where email = ?", array((string)$_SESSION['sys_email']))->fields[0];
		
			if(empty($firstname) or empty($lastname))
			{
				$smarty->assign('message', 'Lengkapi data dibawah ini!');
				$smarty->assign('flag', 'error');
			}elseif($newpassword != '' and $newpassword != $confirmpassword) {
				$smarty->assign('message', 'New password dan confirm password tidak sama!');
				$smarty->assign('flag', 'error');
			}elseif($newpassword != '' and $passdb != sha1($oldpassword)) {
				$smarty->assign('message', 'Old password tidak sama!');
				$smarty->assign('flag', 'error');
			}else
			{

				if($newpassword == ''){
					$password = $passdb;
				}else{
					$password = sha1($newpassword);
				}


				$result = &$db->Execute("update users set firstname = ?, lastname = ?, password = ? where email = ?", array((string)$firstname, (string)$lastname, (string)$password, (string)$_SESSION['sys_email']));
				
				if($result)
				{
					

					$user_id = &$db->Execute("select user_id from users where email = ? order by user_id desc limit 1", array((string)$_SESSION['sys_email']))->fields[0];
	                $folder_path = "img/users/";
	                

					// start thumbnail
					$extension = strtolower(substr($_FILES['image']['name'], strrpos($_FILES['image']['name'], '.')));
					if($_FILES['image']['size'] != 0)
					{
		                $db->Execute('update users set image = ? where user_id = ?', array((string)$user_id.$extension, (int)$user_id));
						move_uploaded_file($_FILES['image']['tmp_name'], $folder_path.$user_id.$extension);
						
						try
							{
								$thumb = PhpThumbFactory::create($folder_path.$user_id.$extension);
							}
							catch (Exception $e)
							{
								 echo $e;
							}
		
						$thumb->resize(300, 0);
						$thumb->save($folder_path.$user_id."_1".$extension);
						
						$thumb->resize(150, 0);
						$thumb->save($folder_path.$user_id."_2".$extension);
					}

					$smarty->assign('message', 'Success update data user.');
					$smarty->assign('flag', 'success');

					header('location: '.$base_url.'profile/success/');

				}
				else
				{					
					$smarty->assign('message', 'Upload gambar gagal!');
					$smarty->assign('flag', 'error');
				}
			}

		}
	}

    $smarty->display('_profile.tpl');
    
?>