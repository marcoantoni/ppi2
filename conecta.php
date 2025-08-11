<?php

	// conecta.php

	$con = mysqli_connect("127.0.0.1", "root", "", "programacaoparainternet");

	// testa se estabeleceu a conexão com o banco de dados
	if (!$con){
		// caso não tenha sido estabelecida por qualquer erro, exibe uma mensagem e termina o script
		die("Houve um erro ao conectar com o banco de dados");
	}
?>