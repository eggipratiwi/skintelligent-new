<?php

	require_once('lib/phpthumb/ThumbLib.inc.php');

	//$db->debug = true;

	if($url2 == 'add' or $url2 == 'edit'){
		if($url2 == 'edit'){
			$rsUser = &$db->Execute("select * from users where user_id = ?", array((string)$url3));
			$smarty->assign('firstname', $rsUser->fields['firstname']);
			$smarty->assign('lastname', $rsUser->fields['lastname']);
			$smarty->assign('email', $rsUser->fields['email']);
			$smarty->assign('username', $rsUser->fields['username']);
			$smarty->assign('password', '');
			$smarty->assign('password2', '');
			$smarty->assign('rules', $rsUser->fields['position']);
			$smarty->assign('activation', $rsUser->fields['activation']);
			$smarty->assign('image', $rsUser->fields['image']);
		}


		if(isset($_POST['save'])){

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$rules = $_POST['rules'];
			$activation = $_POST['activation'];
			$image = $_POST['image'];

			$smarty->assign('firstname', $firstname);
			$smarty->assign('lastname', $lastname);
			$smarty->assign('email', $email);
			$smarty->assign('username', $username);
			$smarty->assign('password', $password);
			$smarty->assign('password2', $password2);
			$smarty->assign('rules', $rules);
			$smarty->assign('activation', $activation);

			$countUser = &$db->Execute("select COUNT(user_id) from users where email = ?", array((string)$email))->fields[0];

		
			if(empty($firstname) or empty($lastname) or empty($email) or empty($username) or $password == '' or $password2 == '' or empty($rules) or $activation == '')
			{
				$smarty->assign('message', 'Lengkapi data dibawah ini!');
				$smarty->assign('flag', 'error');
			}elseif($password != $password2) {
				$smarty->assign('message', 'Password tidak sama!');
				$smarty->assign('flag', 'error');
			}elseif($countUser > 0 and $url2 == 'add') {
				$smarty->assign('message', 'Email already exist!');
				$smarty->assign('flag', 'error');
			}
			else
			{

				if($url2 == 'add'){
					$result = &$db->Execute("INSERT INTO  `users` (`user_id` ,`username` ,`email` ,`position` , `activation`, `firstname`, `lastname`, `image`, `password`)VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);", array((string)$username, (string)$email, (string)$rules, (int)$activation, (string)$firstname, (string)$lastname, (string)$image, (string)sha1($password)));
				}elseif ($url2 == 'edit') {
					
					$result = &$db->Execute("update users set position = ?, activation = ?, firstname = ?, lastname = ?, password = ? where user_id = ?", array((string)$rules, (int)$activation, (string)$firstname, (string)$lastname, (string)sha1($password), (int)$url3));
				}
				if($result)
				{
					

					$user_id = &$db->Execute("select user_id from users where email = ? order by user_id desc limit 1", array((string)$email))->fields[0];
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

					$smarty->assign('message', 'Success create new user.');
					$smarty->assign('flag', 'success');


					header('location: '.$base_url.'users/manage-user/');

				}
				else
				{					
					$smarty->assign('message', 'Upload gambar gagal!');
					$smarty->assign('flag', 'error');
				}
			}

		}
	}elseif($url2 == 'delete'){

		$user_id = $url3;

		if($user_id !='')
		{
			$result = &$db->Execute("delete from users where user_id in (".$user_id.")");
		}
		else
		{
			echo"<script>alert('Oops! Sorry Actions Filed.');</script>";
			header('location: failed');
			exit();
		}

		header('location: '.$base_url.'users/manage-user/');
	}

    $smarty->display('_user-form.tpl');
    
?>