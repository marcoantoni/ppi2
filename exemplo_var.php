<?php
	// exemplo_var.php

	$nome = "Milena";	// string

	$idade = 17;	// int

	$peso = 55.8;	// float

	$altura = 1.63;	// float

	$temCNH = true;	// boolean

	// printando as informações

	// . é operador de concatenação 
	echo ("Nome: <b>" . $nome . "</b><br>");

	echo ("Idade <b>: $idade anos </b><br> ");

	echo ("Peso: <b>$peso kg </b><br>");

	echo ("Altura: <b>$altura </b> m <br>");

	echo ("Tem carteira de habilitação: <b>$temCNH</b><br>");

	// exemplo operadores aritméticos
	$num1 = 12;

	$num2 = 3;

	$soma = $num1 + $num2;

	$sub = $num1 - $num2;

	$mult = $num1 * $num2;

	$div = $num1 / $num2;

	echo ("A soma de $num1 + $num2 é $soma<br>");

	echo ("A subtração de $num1 - $num2 - $sub<br>");

	echo ("A multiplicação de $num1 * $num2 é $mult <br>");

	echo ("A divisão de $num1 / $num2 é $div <br>");

	// Faça um algoritmo que tenha duas variáveis que armazenam as horas trabalhadas por um funcionário e o valor recebido por hora, e em seguida, calcule quanto será o salário desse funcionário. 

	$horas_trabalhadas = 180;
	$valor_hora = 7.8;

	echo ("O salário será de R$: " . ($horas_trabalhadas * $valor_hora) );

	// exemplo de estruturas de decisão

	// condição para ser maior de idade

	if ($idade >= 18) {
		echo ("Com $idade é maior de idade");	
	} else {
		echo ("Com $idade é menor de idade");	
	}

	// exemplo de if aninhado: quero saber se um numero é positivo, negativo ou 0

	$num = 0;

	if ($num < 0){
		echo ("Negativo");
	} else if ($num == 0){
		echo ("Zero");
	} else {
		echo ("Positivo");
	}
?>