<?php
	// primeiro_acesso.php
	
	date_default_timezone_set("America/Sao_Paulo");

	$agora = date("H:i d/m/Y");

	session_start();
	
	$_SESSION["acesso"] = $agora;
	
?>