<?php
	session_start();
	if(isset($_SESSION['nome'])){
		echo $_SESSION['nome'];
		echo "<br>";
		echo $_SESSION['login'];
		echo "<br>";
		echo $_SESSION['tipo'];
	}else{
		header('location:home.php');
	}
	
?>
	