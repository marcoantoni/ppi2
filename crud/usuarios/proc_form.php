<?php
	// proc_form.php

	if (!isset($_POST["enviar"]) )
		header("location: create.php");

	// criando variaveis para armazenar o valor de cada input

	$usuario = $_POST["usuario"];
	$email = $_POST["email"];
	$nascimento = $_POST["nasc"];	
	$cpf = $_POST["cpf"];
	$telefone = $_POST["fone"];
	$senha = $_POST["senha1"];
	$conf_senha =  $_POST["senha2"];

	$erros = [];	// array para armazenar os erros encontrados na hora do cadastro

	// testa se o campo nome foi preenchido
	if (empty($usuario) )
		$erros[] = "Preencha o <b>nome</b> corretamente";	// caso o nome esteja vazio, armazena essa mensagem dentro do array

	if (empty($email) )
		$erros[] = "Preencha o <b>e-email</b> corretamente";

	if (empty($nascimento) )
		$erros[] = "Preencha a <b>data de nascimento</b>";

	if (empty($cpf) )
		$erros[] = "Preencha o <b>cpf</b>";

	if (empty($telefone))
		$erros[] = "Preencha o <b>telefone</b>";

	// validação da senha

	if (empty($senha)){
		$erros[] = "Preencha a <b>senha</b>";
	} else {
		// se a senha foi preenchida, testa se são iguais
		if ($senha != $conf_senha)
			$erros[] = "As senhas não são iguais";
	}

	// testa para saber se houve erros ou não no preenchimento do formulário
	if (count($erros) == 0 ){
		// se não tem erros, os dados podem ser salvos no banco de dados
		// abrindo a conexão
		// ip do servidor mysql, usuario do banco de dados, senha do banco de dados, porta do mysql (esse parametro é opcional)
		$con = mysqli_connect("localhost", "root", "", "programacaoparainternet", 3306);

		// consulta sql que insere no banco
		echo $sql = "INSERT INTO usuarios (nome, email, telefone, cpf, nascimento, senha) VALUES ('$usuario', '$email', '$telefone', '$cpf', '$nascimento', '$senha') ";
	} else {
		// se cair aqui, é porque tem erros
		foreach($erros as $erro){
			echo ("$erro <br>");
		}
	}


?>