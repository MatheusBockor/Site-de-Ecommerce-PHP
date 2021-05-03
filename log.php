<html>
   <head>
       <link rel="shortcut icon" type="image/png" href="icone.png"/>
      <title>LOGIN CADASTRO</title>
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
   <form action="login_valid.php" method="POST">
    <div id="log">
	    <p align="center"> LOGIN </p>
		 <center>
		  Email :<input type="text" name="email"> <br><br>
		  Senha:<input type="password" name="senha"> <br><br>
		   <center>
		  <input type="submit" name="login" value="Entrar">
		  </center>
		   </center>
	</div>
	</form>
	     <form action="cadastro_post.php" method="POST">
	<div id="cad">
		<p align="center"> CADASTRO </p>
		 <center>
		   Nome : <input type="text" name="nome"> <br><br>
		      Sobrenome : <input type="text" name="sobrenome"> <br><br>
		        Email : <input type="text" name="email"> <br><br>
		            Senha : <input type="password" name="senha"> <br><br>
		              RG : <input type="text" name="rg"> <br><br>
					  CPF : <input type="text" name="cpf"> <br><br>
		      <input type="submit" name="cadastro" value="Criar Conta">
		 </center>
    </div>
              
			  </div>
				

	  <hr style="clear:both;visibility:hidden;">
</body>
</html>
