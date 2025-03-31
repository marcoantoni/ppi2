<?php
	// date.php

	// a função date retorna uma string de acordo com o parametro do tipo string informado

	$dia = date("d");	// retorna o dia do mes no formato de 2 digitos

	$mes = date("m");// retorna o mes no formato de 2 digitos
	echo ("$dia <br>"); 

	echo ("Mês: $mes <br>");

	// Y - retorna o ano no formato de 4 digitos
	// y - retorna o ano no formato de 2 digitos
	echo ("Ano " . date("Y") . "<br>");

	// pode-se passar uma string com todos os argementos para já formatar a data
	// irá mostrar 31/03/2025
	echo ("Hoje é " . date("d/m/Y") );

	// date também permite recuperar informações relacionadas ao horários

	// trocando o timezone para que o horário fique correto
	date_default_timezone_set("America/Sao_Paulo");

	echo ("Agora é " . date("H:i:s") );
	// H: hora no formato 24 horas
	// h: hora no formato de 12 horas
	// i: minutos
	// s: segundos

?>