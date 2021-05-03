<html>
  <head>
     <title>Cadastrador</title>
  </head>

<body>
<?php
	session_start();
	if (isset($_SESSION ['email'])){
		echo $_SESSION['email'];
		echo ' / ';

		
    if ($_SESSION ['tipo'] == "ADM"){
		echo "ADMINISTRADOR";
		echo " <a href='adm.php'><button>ADM</button></a>";
	}else{
		header("location:error.php");
	}
		echo " <a href='deslogar.php'><button>DESLOGAR</button></a>";
		
	}else{
	header("location:error.php");
	
	}
	?>
<form action="produto_post.php" enctype="multipart/form-data" method="POST">
   Nome <input type="text" name="nome">  
  Tamanho<input type="text" name="tamanho">
    Preço<input type="text" name="preco">
     Cor<input type="text" name="cor"> 
       Categoria:<select name="id_categoria">
	 <option value="1">Bikes Completas</option>
	 <option value="2">Guidões</option>
	 <option value="3">Mesas</option>
	 <option value="4">Freios</option>
	 <option value="5">Aros</option>
	 <option value="6">Pneus</option>
	 <option value="7">Cubos</option>
	 <option value="8">Acessórios</option>
	 <option value="9">Quadros</option>
	 Imagem<input type="file" name="imagem">
    <br><Br>
	<center>
<input type="submit" value="Cadastrar">	 
	
	 
	 
</body>
</html>