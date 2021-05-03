	<?php
		include('conectar.php');
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$sql = "select * from cliente where email='$email' and senha='$senha'";
		//echo $sql;
		$consulta = mysql_query($sql)or die(mysql_error());
		session_start();
		session_destroy();
		session_start();
		
		while($sql_result = mysql_fetch_assoc($consulta)){
			$_SESSION['email'] = $sql_result["email"];
			$_SESSION['senha'] = $sql_result["senha"];
			$_SESSION['tipo'] = $sql_result["tipo"];
		}
		if(isset($_SESSION['email'])){
			if($_SESSION['tipo'] == "ADM"){
				header("location:home.php");
			}else{
				header("location:home.php");
			}
			
		}else{
			header("location:erro.php");
		}
		
		?>
<html>
  <head>
     </head>
<body>
<form action="deslogar.php">
<input type="submit" value="Deslogar"> 
