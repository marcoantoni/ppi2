<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		/* diferença entre include e require
		
		include tenta incluir um arquivo e caso não consiga encontrá-lo, irá gerar um warning, mas o script continua executando

		require tenta incluir um arquivo e caso não consiga encontrá-lo, irá gerar um error, interrompendo a execução do script

		*/

		require("menu.php");

		require("variaveis.php");

		echo ("Nome: $nome <br>");
		echo ("Idade: $idade <br>");

		// atualizando a idade
		$idade = 18;
		echo ("Idade: $idade <br>");

		// incluindo o arquivo outra vez

		// ao incluir um arquivo outra vez, as variaveis serão "resetadas" - no caso, a idade voltará ao valor 15
		// ao usar o include_once ou require_once, quando o PHP checar que o arquivo já foi incluído uma vez, a inclusão não ocorrerá novamente, ou seja, as variaveis não serão redefinidas.
		
		require_once("variaveis.php");

		echo ("Nome: $nome <br>");
		echo ("Idade: $idade <br>");
	?>

	<h1>Página inicial</h1>

	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


</body>
</html>