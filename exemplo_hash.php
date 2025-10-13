<?php
	
	$senha = "81dc9bChurr@sc0";

	echo ("Senha com hash md5: " . md5($senha) );

	echo ("<br>Senha com hash sha1: " . sha1($senha) );

	echo ("<br>Exibindo todos algoritmos de criptografia disponiveis");

	// hash_algos retorna um array, com todas as funções de hash disponiveis. Por isso ela é exibida com o print_r
	print_r(hash_algos() );

	// usando um algoritmo listado com hash_algos(). Isso é feito com a função hash()
	echo ("<br>Senha com hash SHA512: " . hash("sha512", $senha) );

	// criando uma função chamada sha512 para evitar usar hash("sha512", $senha) )

	function sha512($string){

		return hash("sha512", $string);
	
	}

	echo ("<br>Hash de $senha é: " . sha512($senha) );

?>