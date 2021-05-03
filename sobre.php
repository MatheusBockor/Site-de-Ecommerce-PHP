<html>
   <head>
       <link rel="shortcut icon" type="image/png" href="icone.png"/>
      <title>SOBRE A LOJA</title>
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

               <div id="imagem_loja">
                  <img class="loja" src="loja.png">
                </div>

				  <div id="coment">
				  <form action="comentario_post.php" enctype="multipart/form-data" method="POST">
				     Nome: <input type="text" name="nome">
					 <br>
					 Email: <input type="text" name="email">
                     <textarea name="coment" rows="7" cols="36">Deixe seu comentário</textarea><br>
					 <center>
					 <br>
					 <input type="submit" name="enviar" value="Enviar">
					 <center>
                  </div>
				  
				 <div id="redes">
				<font color="black"> NOSSAS REDES SOCIAIS:
				  </div>
				  
			  <div id="icones">
			    <img class="icones" src="facebook.png">
				<img class="icones" src="twitter.png">
				<img class="icones" src="instagram40x40.png">
			  </div>
				

	  <hr style="clear:both;visibility:hidden;">
</body>
</html>
