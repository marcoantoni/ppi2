<?php
	// arquivo session_read.php

	// é obrigatório iniciar a sessão para poder usá-la, mesmo que ela foi iniciada em outro arquivo
	session_start();

	// exibindo as variaveis de sessão
	echo ("Nome: " . $_SESSION["nome"] . "<br>");

	// testando se a variavel de sessão foi definida, para evitar warnings na página

	if (isset($_SESSION["idade"]) == true) {
		echo ("Idade: " . $_SESSION["idade"] . "<br>");
	} else {
		echo ("A variavel de sessão 'idade' ainda não foi criada");
	}


	// excluindo a variavel de sessão 'idade'
	unset($_SESSION["idade"]);
?>