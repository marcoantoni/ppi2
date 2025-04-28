<?php
	// proc_form.php

	/* pegando o valor digitado em cada input
		Se os dados do formulário são enviados pelo método GET, usa-se a variavel global $_GET
	*/
	$nome = $_GET["nome"];
	$email = $_GET["email"];
	$nascimento = $_GET["nasc"];
	$sexo = $_GET["sexo"];
	$cidade = $_GET["cidade"];


	// testando se o nome foi preenchido
	/*
	if (empty($nome) == true) {
		echo ("O nome não foi preenchido");
	} else {
		echo ("O nome foi preenchido");
	}
	*/

	// array para armazenar os erros encontrados no preenchimento do formulário
	$erros = [];	

	if (empty($nome) ){
		$erros[] = "O <b>nome</b> não foi preenchido";
	}

	if (empty($nascimento) ){
		$erros[] = "O <b>nascimento</b> não foi preenchido";
	}

	if (empty($email) ){
		$erros[] = "O <b>email</b> não foi preenchido";
	}

	if (empty($cidade) ){
		$erros[] = "A <b>cidade</b> não foi preenchida";
	}

	if ($sexo == 1) {
		$sexo = "masculino";
	} else if ($sexo == 2){
		$sexo = "feminino";
	} else {
		$sexo = "outro";
	}


	echo ("Exibindo os dados do formulário <br>");
	echo ("Nome: <b>$nome</b><br>");
	echo ("Email: <b>$email</b><br>");
	echo ("nascimento: </b>$nascimento</b><br>");
	echo ("Sexo: <b>$sexo</b><br>");
	echo ("Onde mora: <b>$cidade</b><br>");
	

?>