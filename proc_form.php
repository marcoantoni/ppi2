<?php
	// proc_form.php

	// testa se a variavel $_POST["enviar"] existe. Se ela existe, é por que a variavel foi criada quando foi clicado no botão "Enviar"
	if (!isset($_POST["enviar"]) ) {
		header("location: form.php");	// redireciona para a página form.php
	} 


	/* pegando o valor digitado em cada input
		Se os dados do formulário são enviados pelo método GET, usa-se a variavel global $_POST
	*/
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$nascimento = $_POST["nasc"];
	$sexo = $_POST["sexo"];
	$cidade = $_POST["cidade"];


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

	if (count($erros) == 0) {
		echo ("Exibindo os dados do formulário <br>");
		echo ("Nome: <b>$nome</b><br>");
		echo ("Email: <b>$email</b><br>");
		echo ("nascimento: </b>$nascimento</b><br>");
		echo ("Sexo: <b>$sexo</b><br>");
		echo ("Onde mora: <b>$cidade</b><br>");
	} else {
		// se cair aqui, é porque o form preenchido teve campos vazios
		foreach($erros as $erro){
			echo ("$erro <br>");
		}

	}
	

?>