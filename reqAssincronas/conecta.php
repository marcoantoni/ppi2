<?php

	// conecta.php
	// arquivo responsável por fazer a conexão com o banco de dados
	// todos as páginas que usam banco de dados podem incluir esse arquivo
	$conn = mysqli_connect("marcoantoni.com.br", "programacaoparainternet", "!@#$%^&*()-", "req_assincronas");

	if (!$conn){
		die("Houve um erro ao conectar com o banco de dados");
	}
?>