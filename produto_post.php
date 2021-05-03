<html>
	<head>
		<title> VALIDAÇÃO DE CADASTRO </title>
	</head>
	<body>
		
			
			<?php
				
				include("conectar.php");
				ini_set('display_errors' , 'on');
				
				error_reporting( E_ALL | E_STRICT );

				// Recupera os dados dos campos
                $nome = $_POST ['nome'];
				$tamanho = $_POST['tamanho'];
				$preco = $_POST['preco'];
				$cor = $_POST['cor'];
				$id_categoria = $_POST['id_categoria'];
				$foto = $_FILES["imagem"];

				$error = Array();

				// Se a foto estiver sido selecionada
				if(!empty($foto["name"])){

					// Verifica se o arquivo é uma imagem
					if( !preg_match( '/^image\/(pjpeg|jpeg|png|gif|bmp)$/' , $foto[ 'type' ])){
						$error[1] = "Isso não é uma imagem.";
					}

					// Se não houver nenhum erro
					if(count($error) == 0) {
						//Pega extensão da imagem
						preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

						// Gera um nome único para a imagem
						$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

						// Caminho de onde ficará a imagem
						$caminho_imagem = "produtos/" . $nome_imagem;

						// Faz o upload da imagem para seu respectivo caminho
						move_uploaded_file($foto["tmp_name"], $caminho_imagem);

						//Insere os dados no banco
						$sql = "insert into produto (nome,tamanho,preco,cor,imagem,id_categoria) values
						(\"$nome\",\"$tamanho\",\"$preco\",\"$cor\",\"$nome_imagem\",\"$id_categoria\");
						";
						
						mysql_query($sql);
						
						echo "CADASTRADO COM SUCESSO";
						echo "<br><a href='home.php'>NÃO QUERO ESPERAR</a>";
						header("refresh:0;url=home.php");
					}
				}
			?>
		</div>
	</body>
</html>
