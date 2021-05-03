<html>
   <head>
        <link rel="shortcut icon" type="image/png" href="icone.png"/>
      <title>ADM</title>
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
		header("location:error.php");
	}
		echo " <a href='deslogar.php'><button>DESLOGAR</button></a>";
		
	}else{
	header("location:error.php");
	
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
</div><br><br><br>
  <?php
			include("conectar.php"); 
			
			$sql = "select * from cliente";
			mysql_query($sql);
			$consulta = mysql_query($sql)or die(mysql_error());
			echo "<table border=1><tr>";
			echo "<td>ID</td>";
			echo "<td>NOME</td>";
			echo "<td>RG</td>";
			echo "<td>CPF</td>";
			echo "<td>NOME</td>";
			echo "<td>SOBRENOME</td>";
			echo "<td>EMAIL</td>";
			echo "<td>SENHA</td>";
			echo "<td>TIPO</td>";
			echo"</td>";
			echo "</tr>";

			while($sql_result = mysql_fetch_assoc($consulta)){
				echo "<tr>";
				echo "<td>".$sql_result['id']."</td>";
				echo "<td>".$sql_result['nome']."</td>";
				echo "<td>".$sql_result['rg']."</td>";
				echo "<td>".$sql_result['cpf']."</td>";
				echo "<td>".$sql_result['nome']."</td>";
				echo "<td>".$sql_result['sobrenome']."</td>";
				echo "<td>".$sql_result['email']."</td>";
				echo "<td>".$sql_result['senha']."</td>";
				echo "<td>".$sql_result['tipo']."</td>";
				
				echo "</tr>";
			}
			echo "</table>";
		?>
  
</div>
	
	  <hr style="clear:both;visibility:hidden;">
</body>
</html>












