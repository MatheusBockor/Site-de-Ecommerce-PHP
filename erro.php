<html>
   <head>
        <link rel="shortcut icon" type="image/png" href="icone.png"/>
      <title>Home</title>
	    <link rel="stylesheet" type="text/css" href="css.css" />
	</head>
<body>
<?php
  session_start();
  if (isset($_SESSION ['nome'])){
  echo $_SESSION ['nome'];
  echo "<br>";
  echo $_SESSION ['login'];
  echo "<br>";
  echo $_SESSION ['tipo'];
  }else{
   //header ('location:login+session_form.php');
   }
   ?>
   <br>
   
	
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
              <button class="botao2">BIKES COMPLETAS</button>
              <a href="produtos.php"><button class="botao2">GUIDÕES</button><br></a>
              <button class="botao2">MESAS</button><br> 
              <button class="botao2">FREIOS</button><br>
              <button class="botao2">AROS</button><br>    			  
			  <button class="botao2">PNEUS</button><br>  
			  <button class="botao2">CUBOS</button><br>  
			  <button class="botao2">ACESSÓRIOS</button><br>  
			  <button class="botao2">QUADROS</button><br>
</div>
</div>

  <div id="direita">

<img class="vertical" src="vertical.jpg">  
</div>

<div id="destaque">


<font color="red">FALHA AO LOGAR<br>
CRIE UMA CONTA OU TENTE NOVAMENTE
<br><br><br><br>
<a href="log.php"><input type="submit" value="LOGIN/CADASTRO"></a>

</div>
</div>
	  <hr style="clear:both;visibility:hidden;">
</body>
</html>
