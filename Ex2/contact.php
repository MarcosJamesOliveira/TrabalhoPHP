<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8" />
	<title>Exercicio2</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <script type="text/javascript" src="lib/jquery-2.2.1.min.js"></script>
</head>
<body>
	<div>
		<div class="cabecalho">
			<?php require 'head.php';?>
		</div>

		<div class="menu">
			<?php require 'menu.php';?>
		</div>
	<div class="conteudo-principal">
	<?php
	echo '
		<p>Genrente de Projeto</p><br>
		<p>Contato: (xx) 12345-6789</p><br>
		<p>Analista de Comunicações</p><br>
		<p>Contato:(xx) 99999-3333</p><br>
		<p>Endereço: Av. Antônio Maria José,1234, Jardim Azul</p><br>
		<p>Ibirajurara-XH</p>
 
		'
	;?>
	</div>
	<div class="rodape-pagina"> 
		<?php require 'footer.php';?>
	</div>
	
	</div>
</body>
</html>