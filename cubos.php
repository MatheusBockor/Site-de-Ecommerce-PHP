<html>
   <head>
        <link rel="shortcut icon" type="image/png" href="icone.png"/>
      <title>Produtos</title>
	    <link rel="stylesheet" type="text/css" href="css.css" />
	</head>
<body>
<?php
	session_start();
	if (isset($_SESSION ['email'])){
		echo $_SESSION['email'];
		echo ' / ';
		
    if ($_SESSION ['tipo'] == "ADM"){
		echo "ADMINISTRADOR";
		echo "<a href='adm.php'><button>ADM</button></a>";
	}else{
		echo "USER";  
	}
		echo " <a href='deslogar.php'><button>DESLOGAR</button></a>";
		
	}else{
	
	}
	?>
   
 
 
 <div id="cadastrocoisa">
	  <div id="banner">
	     <img class="imagem_banner" src="banner.jpg">
		 </div>
		 <br>
	          <div id="botao">
                     <a href="home.php"><button class="botao">HOME</button></a>
              <a href="sobre.php"><button class="botao">SOBRE A LOJA</button></a>
              <a href="log.php"><button class="botao">LOGIN / CADASTRO</button></a> 
              <a href="carrinho.php"><button class="botao">CARRINHO</button></a>  			  
		</div><br><Br>
 <div id="grande">

	<div id="botao2">
             <a href="bikescomp.php"><button class="botao2">BIKES COMPLETAS</button><br></a>
              <a href="produtos.php"><button class="botao2">GUIDÕES</button><br></a>
              <a href="mesas.php"><button class="botao2">MESAS</button><br></a>
              <a href="freios.php"><button class="botao2">FREIOS</button><br></a>
              <a href="aros.php"><button class="botao2">AROS</button><br></a> 			  
			  <a href="pneus.php"><button class="botao2">PNEUS</button><br></a> 
			  <a href="cubos.php"><button class="botao2">CUBOS</button><br></a>  
			<a href="acessorios.php"><button class="botao2">ACESSÓRIOS</button><br></a> 
			  <a href="quadros.php"><button class="botao2">QUADROS</button><br></a>
</div>
</div>

  <div id="direita">
   <img class="vertical" src="vertical.jpg"> 

   </div>

   
   
<?php

include("conectar.php");
if(!isset($_GET['pagina'])){
$pagina = 1;
}else{
$pagina = $_GET['pagina'];
}

$nrRegistrosPagina = 3;
$sql = mysql_query("Select * FROM produto  where id_categoria ='7' limit ".($pagina*$nrRegistrosPagina-$nrRegistrosPagina).",$nrRegistrosPagina");
while($sql_result = mysql_fetch_assoc($sql)){
echo "<a href='produto.php?id=".$sql_result['id']."'>";
echo "<div id='produtos'>";
echo "<img class='produto' src='/produtos/".$sql_result['imagem']."'>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<p class='p'>";
echo "<br>";
echo "<br>";
echo "<br>";

echo $sql_result['nome'];
echo "<br>";
echo "<br>";
echo "R$";
echo $sql_result['preco'];
echo "</div>";
echo "</a>";
}
//echo "<br>";
?>
<div id='paginacao' style=";margin-left:auto;margin-right:auto;width:300px;margin-bottom:20px;border-radius:25px;border:2px solid black;padding:5px;">
<center>
<?php
$sql = mysql_query("Select count(id) as nr_registros from produto");
$sql_return = mysql_fetch_assoc($sql);
for($i=1;$i<=$sql_return['nr_registros']/3;$i++){
echo "<a href='cubos.php?pagina=$i'><button class=''>$i</button></a> ";
}

?>
</center>
</div> 
   
</div>
   
</div>

	  <hr style="clear:both;visibility:hidden;">
</body>
</html>



