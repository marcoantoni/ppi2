<?php
	// valida_login.php
	// aqui fica a parte lógica de login (busca no banco de dados) 

	require("conecta.php"); // inclui o arquivo responsável pela conexão com o banco de dados

	// recuperando o valor dos inputs do formulário de login.php
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];

	$sql = "SELECT * FROM usuarios WHERE email = '$usuario' OR cpf = '$usuario' AND senha = '$senha' ";

	// executa a consulta no banco de dados
	$resultado = mysqli_query($con, $sql);

	session_start();

	if (mysqli_num_rows($resultado) > 0){
		$_SESSION["estahLogado"] = true;	// variavel para controlar se o usuario esta logado
		header("location: principal.php");	// redireciona para a página que o usuário irá visualizar após o login
	} else {
		$_SESSION["erro"] = "Usuário ou senha incorretos";
		header("location: login.php");
	}

?>