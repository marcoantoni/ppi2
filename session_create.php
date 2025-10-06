<?php
	
	// arquivo session_create.php

	// função responsável por iniciar a sessão
	session_start();

	// criando um variavel de sessão chamada nome
	$_SESSION["nome"] = "Júlia";
	
	// criando outra variavel de sessão chamada idade
	$_SESSION["idade"] = 18;

	// exibindo uma variavel de sessão
	echo ("Nome: " . $_SESSION["nome"]);
?>