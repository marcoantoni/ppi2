<?php
	// recuperando_cookie.php

	// os cookies ficam acessíveis na variavel $_COOKIE

	// testa se os cookies foram criados antes de tentar exibi-los
	// isso evita que os "warnings sejam exibidos ao usuário"

	if (isset($_COOKIE["nome"]))
		echo ("O valor salvo no cookie foi  " . $_COOKIE["nome"]) ;

	if (isset($_COOKIE["curso"]))
		echo ("O valor salvo no cookie foi  " . $_COOKIE["curso"]) ;
?>