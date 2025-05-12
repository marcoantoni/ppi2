<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		Nome: <input type="text" name="nome"> <br>
		<!-- não estou usando o tipo number, pois quero permitir que sejam digitados valores não números. a validação será feita pelo servidor -->
		Idade: <input type="text" name="idade"> <br>
		<input type="submit" name="enviar">
	</form>
	<?php
		// form_teste_tipo.php

		// testa se clicou no botão de enviar para não executar as validações ao carregar a página
		if (isset($_POST["enviar"])) {
			// aqui a lógica acontece, pois o usuário clicou em enviar
			$nome = $_POST["nome"];
			$idade = $_POST["idade"];
			
			// teste se o nome foi preenchido
			if (! empty($nome) ){
				echo ("Nome não vazio");	// mostrando a mensagem para deixar o exemplo visual

				// teste do tipo do dado
				// teste se o $nome é uma string
				// obs: sempre os dados são enviados como string, portanto, mesmo que o usuário digite um número, irá dizer que é do tipo string
				if (is_string($nome) ){
					echo ("A variavel nome é do tipo string <br>");
				} else {
					echo ("A variavel NÃO é do tipo string <br>");
				}
				echo ("Nome $nome <br>");
			}

			if (!empty($idade)){
				// usa-se a função is_numeric para testar números vindos do formulário
				if (is_numeric($idade) ){
					//echo ("A idade foi preenchida e é um número <br>");
					echo ("Idade $idade <br>");
				} else {
					echo ("A variavel idade foi preenchida e não é um número <br>");
				}
			}
		} 

	?>
</body>
</html>