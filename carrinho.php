<html>
   <head>
        <link rel="shortcut icon" type="image/png" href="icone.png"/>
      <title>Home</title>
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
<center>
<br><br><br>
				<?php
						
					echo "<table border=2>
					<tr>
					<td>
					ID
					</td>
					<td>
					IMAGEM
					</td>
					<td>
					CATEGORIA
					</td>
					<td>
					NOME
					</td>
					<td>
					PREÇO
					</td>
					<td>
					AÇÕES
					</td>
					</tr>
					";
					//echo sizeof(array_keys($_SESSION['carrinho']));
					for($i = 1 ;$i<sizeof(array_keys($_SESSION['carrinho']));$i++){
					echo "
					<tr>
					<td>
					$i | ".$_SESSION['carrinho'][$i]['idProd']."
					</td>
					";
					
					include("conectar.php");
				$sql = mysql_query("select * from produto inner join categoria on categoria.id=produto.id_categoria where produto.id='".$_SESSION['carrinho'][$i]['idProd']."'");
				while($sql_result = mysql_fetch_assoc($sql)){
						echo "
						<font color='black'>
						<td>
						'<img class='car' src='/produtos/".$sql_result['imagem']."'>
						</td>
						<td>
						".$sql_result['tipo']."
						</td>
						<td>
						".$sql_result['nome']."
						</td>
						<td>
						R$
						".$sql_result['preco']."
						</td>
						<td>
						<form action='excluirprodutocarrinho.php'>
						<input type='hidden' value='".$i."' name='indextirar'>
						<input type='submit' value='Excluir'>
						</form>
						</td>
						";
						
				
				}
					
					echo "
					</td>
					</tr>
					";
					
					}
				?>
				</table>
			
			<br>
			</center>
			<a href="finalizar.php"><center><input class="carrinhov" type="submit" value="Finalizar Compra"></a>
			</div>
			<br><br>
			</div>
			
		
	</body>
</html>