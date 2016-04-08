<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
	<form action="login.php">
	
	
	<?php
	$_SESSION["name"]=$_POST["name"];
	$_SESSION["password"]=$_POST["password"];
	echo "Variáveis foram setadas.<br>";

	echo "Usuário is " .$_SESSION["name"]."<br>";
	
	?>

	</form>
</body>
</html>