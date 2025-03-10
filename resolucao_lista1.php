<?php
	// 4.	Faça um algoritmo que avalia o conteúdo de três variáveis do tipo inteiro, e em seguida, escreve a data por extenso. Exemplo dia=10, mês=3, ano=2025 -> 10 de março de 2025
	$dia = 10;
	$mes = 3;
	$ano = 2025;
	$mes_ext = "";
	
	switch($mes){
		case 1:
			$mes_ext = "Janeiro";
			break;
		case 2:
			$mes_ext = "Fevereiro";
			break;
		case 3:
			$mes_ext = "Março";
			break;
		case 4:
			$mes_ext = "Abril";
			break;
		case 5:
			$mes_ext = "Maio";
			break;
		case 6:
			$mes_ext = "Junho";
			break;
		case 7:
			$mes_ext = "Julho";
			break;
		case 8:
			$mes_ext = "Agosto";
			break;
		case 9;
			$mes_ext = "Setembro";
			break;
		case 10:
			$mes_ext = "Outubro";
			break;
		case 11: 
			$mes_ext = "Novembro";
			break;
		default:
			$mes_ext = "Dezembro";
	}

	echo ("$dia de $mes_ext de $ano");
?>