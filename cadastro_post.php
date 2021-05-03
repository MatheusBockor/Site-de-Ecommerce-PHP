<?php
	
	include("conectar.php");

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$rg = $_POST ['rg'];
	$cpf = $_POST ['cpf'];
	
	$sql = "insert into cliente (nome,sobrenome,email,senha,rg,cpf,tipo) values
	(\"$nome\", \"$sobrenome\",\"$email\",\"$senha\",\"$rg\",\"$cpf\",\"USER\");
	";
	
	mysql_query($sql);
	header("location:home.php");

?>