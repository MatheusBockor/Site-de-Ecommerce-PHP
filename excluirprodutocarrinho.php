<?php

session_start();

array_splice($_SESSION['carrinho'] , $_GET["indextirar"], 1);

header("Location:carrinho.php");

?>