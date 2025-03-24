<?php
	/*Faça um algoritmo que tenha 3 variáveis, que representam 3 notas e calcule a média aritmética, no
	entanto, o algoritmo não deve considerar notas inválidas (valores negativos ou maiores que dez)
	*/

	$nota1 = 7;
	$nota2 = 9;
	$nota3 = 9;

	// variaveis auxiliares
	$notas = 0;	// variavel para contar as notas validas
	$soma = 0;	// variavel para somar as notas validas

	// validação da nota1
	if ($nota1 >= 0 && $nota1 <= 10){
		$notas++;
		$soma = $soma + $nota1;
	}

	if ($nota2 >= 0 && $nota2 <= 10){
		$notas++;
		$soma = $soma + $nota2;
	}

	if ($nota3 >= 0 && $nota3 <= 10){
		$notas++;
		$soma = $soma + $nota3;
	}

	$media = $soma / $notas;	// calcula a média 

	printf ("A média obtida foi %.2f", $media );	// para exibir duas casas decimais. outra alternativa é a função number_format

?>