<?php
	// lacos_repeticao.php

	// laço for é um laço de repetição contado - sabe-se quantas vezes ele será executado (condição de saida)
	// tem 3 condiçoes
	// $i = 0 - condição de inicio do laço
	// $i < 10 - condição de saída do laço
	// $i++ - incremento da variavel que itera sobre o laço
	for ($i=0; $i<10; $i=$i+3){
		echo ("Laço for $i <br>");
	}

	// laço while é um laço com pré-validação
	// antes de ser executado, a condição é avaliada para saber se deve ser executado ou não

	$promocao = true;	// se for false, o laço não será executado
	$tempo = 30;

	while ($promocao == true) {
		sleep(1);
		$tempo--;
		echo ("A promoção acaba em $tempo segundos");

		if ($tempo == 0){
			$promocao = false;	// quando for false, o laço interrompe
			echo ("A promoção encerrou");
		}
	}
?>