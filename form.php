<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="proc_form.php">
		<fieldset>
			<legend>Exemplo de formulário</legend>
			Nome: <input name="nome" type="text"> <br>
			E-mail: <input type="email" name="email"> <br>
			Data nascimento <input type="date" name="nasc"> <br>
			Sexo: <input type="radio" name="sexo" value="1"> Masculino <input type="radio" name="sexo" value="2"> Feminino <input type="radio" name="sexo" value="3"> Outro <br>
			Lazer: <input type="checkbox"> Acadêmia <input type="checkbox"> Praticar esportes <input type="checkbox"> Assistir TV (séries, esportes, etc) <br>
			Cidade: <select name="cidade">
				<option>Igrejinha</option>
				<option>Parobé</option>
				<option>Rolante</option>
				<option>Taquara</option>
			</select> 
			<br>
			<input type="submit" name="enviar">
		</fieldset>
	</form>
</body>
</html>