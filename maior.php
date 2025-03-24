<?php
	// 2. Faça um programa que armazena 3 números e exiba o maior deles. 

	$num1 = 40;
	$num2 = 30;
	$num3 = 55;

	$maior = $num1;	// iniciando a variavel com o valor de $num1

	if ($num2 > $maior){
		$maior = $num2;
	} else if ($num3 > $maior){
		$maior = $num3;
	}

	echo ("O maior numero entre $num1, $num2 e $num3 é $maior");
?>