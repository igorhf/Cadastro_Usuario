<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
</head>
<body>
<div>
	<form method="GET" action="dados_cadastro.php">
		<label>Usuario</label><br>
		<input type="text" name="user" placeholder="Usuario" autofocus="on" required="on"><br>
		<label>Senha</label><br>
		<input type="password" name="senha" placeholder="Senha" required="on"><br>
		<label>Email</label><br>
		<input type="email" name="email" placeholder="Email" required="on"><br>
		<input type="submit" name="bt_enviar" value="enviar">
	</form>
</div>
</body>
</html>