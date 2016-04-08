<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
	<form action="login.php">
	
	<?php
	$cookie_name= $_POST["name"];
	$cookie_password=$_POST["password"];
	setcookie($cookie_name,$cookie_password,time () + (86400*30),"/");

	if(!isset($_COOKIE[$_POST["name"]])){
		echo "Cookie named'" . $cookie_name . "' is not set!";
		echo "Cookie named'" . $cookie_password . "' is not set!";
		
	}else{
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is'".$_COOKIE[$_POST["name"]]."'";
	}
	?>

	</form>
</body>
</html>