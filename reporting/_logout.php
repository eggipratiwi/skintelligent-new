<?php
require_once('_header.php');

session_start();

unset($_SESSION['user_id']);
unset($_SESSION['email']);
unset($_SESSION['position']);
unset($_SESSION['first_name']);
session_destroy();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="refresh" content="0" URL="<?php echo $base_url;?>"/>
</head>
<body>

</body>
</html>
