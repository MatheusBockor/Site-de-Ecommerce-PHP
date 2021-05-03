<html>
	<head>
		<title> Comentário </title>
	</head>
	<body>
		
			
			<?php
				
				include("conectar.php");
				ini_set('display_errors' , 'on');
				
				error_reporting( E_ALL | E_STRICT );

				// Recupera os dados dos campos
                $nome = $_POST ['nome'];
				$email = $_POST ['email'];
                $coment = $_POST ['coment'];
		
						$sql = "insert into comentarios (nome,email,coment) values
						(\"$nome\",\"$email\",\"$coment\");
						";
						
					mysql_query($sql);
						
						echo "CADASTRADO COM SUCESSO";
						header("refresh:0;url=comentario_cadastrado.php");
					
				
			?>
		</div>
	</body>
</html>
