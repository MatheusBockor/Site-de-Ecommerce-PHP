<html>
	<head>
		<title> Cadastro </title>
	</head>
	<style>
	label.labelInput{
		width:50px;
		display:inline-block;
	}
	</style>
	<body>
		<form action="cadastro_post.php" method="POST">
			<label class="labelInput" for="txtNome">Nome: </label>
			<input name="nome" id="txtNome">
			<br>
			<label class="labelInput" for="txtLogin">Login: </label>
			<input name="login" id="txtLogin">
			<br>
			<label class="labelInput" for="txtSenha">Senha: </label>
			<input name="senha" type="password" id="txtSenha">
			<br>
			<input type="submit" value="Login">
			</form>
	</body>
</html>