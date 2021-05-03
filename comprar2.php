	<?php
	session_start();
	if(isset($_SESSION['email'])){
	//	echo "teste";
		//echo $_GET["idprod"];
	}
	//$_SESSION['carrinho'] = array("");
	$_SESSION['carrinho'][sizeof(array_keys($_SESSION['carrinho']))]['idProd'] = $_GET["idprod"];

	
	//$_SESSION['carrinho'][array_keys($_SESSION['carrinho'])] = $_GET["idprod"];
	
	header("Location:carrinho.php");
	?>
	
	