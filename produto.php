<html>
   <head>
       <link rel="shortcut icon" type="image/png" href="icone.png"/>
      <title>PRODUTO</title>
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
		echo " <a href='adm.php'><button>ADM</button></a>";
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

$sql = mysql_query("Select * FROM produto  where id ='".$_GET['id']."'");
while($sql_result = mysql_fetch_assoc($sql)){
echo "<div id='produtod'>";
echo "<img class='produtod' src='/produtos/".$sql_result['imagem']."'>";
echo "<div id='titulo'>";
echo $sql_result['nome'];
echo "<br>";
echo "R$";
echo $sql_result['preco'];
echo "</div>";
echo "</div>";
echo "<div id='mini'>";
echo "</div>";
echo "<div id='esquerda'>";
echo "</div>";
echo "<div id='informacoes'>";
echo "Produto: ";
echo $sql_result['nome'];
 echo"<p class='q'>";
 echo"<hr>";
echo "Cor: "; 
echo $sql_result['cor']; 
echo"<p class='q'>";
echo"<hr>";
echo "Tamanho: ";
echo $sql_result['tamanho'];
echo "<hr>";

echo "</div>";
}
//echo "<br>";
?>	 
	  
	  
	  <div id="button3">
	        
			<?php 
		echo " <form action='comprar2.php'>
		        <br>
		        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
				<input type=hidden name='idprod' value='".$_GET['id']."'>
				<input type='submit' value='Comprar'>
				</form>
				";
          ?>
            </a>
	  <hr style="clear:both;visibility:hidden;">
	</div>

	  </body>
</html>	