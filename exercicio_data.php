<?php
	
	// Escreva um programa que escreva a data atual do computador por extenso. Exemplo: Quinta-feira, 29 de dezembro de 2024 
	// resolução usando array

	$diaSemana = ["", "Segunda-feira", "Terça-feira", "Quarta-feira", "Qunta-feira", "Sexta-feira", "Sábado", "Domingo"];

	$meses = ["", "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];

	echo ($diaSemana[date("N")] . date("d") . " de " . $meses[date("n")] . " de " . date("Y") );
?>