<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrando novo usuário</title>
	<link rel="stylesheet" href="../css/form.css">
</head>
<body>
	<form method="POST" action="proc_form.php">
		<fieldset>
			<legend>Novo usuário</legend>
			Nome: <input type="text" name="usuario"> <br>
			Email: <input type="email" name="email"> <br>
			Nascimento: <input type="date" name="nasc"> <br>
			CPF: <input type="text" name="cpf"> <br>
			Telefone: <input type="text" name="fone"> <br>
			Senha: <input type="password" name="senha1"> <br>
			Confirme a senha: <input type="password" name="senha2"> <br>
			<input type="submit" name="enviar" value="Cadastrar">
		</fieldset>
	</form>
</body>
</html>