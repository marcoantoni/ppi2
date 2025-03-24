<?php
	// peso_ideal.php

	/* Elabore um algoritmo que tenha duas variáveis: altura (h) e sexo de um indivíduo e em seguida, calcule
	e mostre peso ideal, conforme as fórmulas abaixo:
	a) Para homens: (72.7*h) - 58
	b) Para mulheres: (62.1*h) - 44.7
	*/

	$altura = 1.75;
	$sexo = "f";
	$peso = 0;	// inicializando a variavel que armazenará o peso do homem/mulher

	if ($sexo == "m"){
		$peso = (72.7 * $altura) - 58;
	} else if ($sexo == "f") {
		$peso = (62.1 * $altura) - 44.7;
	}

	echo ("Para um individuo do sexo $sexo e altura de $altura, o peso ideal é $peso ");

?>