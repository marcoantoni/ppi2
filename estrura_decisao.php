<?php
	// estrutura_decisao.php
	/* exemplo E lógico
	   condições para estar apto par tirar a CNH
	   ser maior de idade E ter passado no teste psicológico
	*/
	 $idade = 18;
	 $passou_teste = false;	// indica se a pessoa passou ou não no teste

	 if ($idade >= 18 && $passou_teste){ 
	 	echo ("Apto a tirar a CNH");
	 } else if ($idade < 18){
	 	echo ("É necessário ser maior de idade para poder inciar a CNH");
	 } else {
	 	echo ("É necessário passar no teste psicológico para poder tirar a CNH");
	 }

	 /* exemplo OU lógico
	 Para o frete ser gratuito, as comrpas devem ter valor igual ou superior a R$ 500 OU o usuário tem que participar do clube de vantagens
	 */
	 $valor_compra = 406.88;
	 $participa_clube = true;	// false - não participa

	 if ($valor_compra >= 500 || $participa_clube){
	 	echo ("<br>Tem direito a frete grátis ");
	 } else {
	 	echo ("<br>Não tem direito a frete grátis");
	 }

	 $num = 18;

	 if ($num == 0){
	 	echo ("Zero");
	 } else if ($num == 1){
	 	echo ("Um");
	 } else if ($num == 2){
	 	echo ("Dois");
	 } else if ($num == 3){
	 	echo ("Três");
	 } else if ($num == 4){
	 	echo ("Quatro");
	 }else if ($num == 5){
	 	echo ("Cinco");
	 } else if ($num == 6){
	 	echo ("Seis");
	 } else if ($num == 7){
	 	echo ("Sete");
	 }  else if ($num == 8){
	 	echo ("Oito");
	 } else if ($num == 9){
	 	echo ("Nove");
	 } 

	 // comando switch case permite "imitar" estruturas de decisão similar a construção acima

	 switch($num){	// $num é a variavel a ser avaliada
	 	case 0:	// 0 é valor possível que a variavel pode ter
	 		echo ("Zero");
	 		break;	// é obrigatório usar para impedir a execução em cascata
	 	case 1:
	 		echo ("Um");
	 		break;
	 	case 2:
	 		echo ("Dois");
	 		break;
	 	case 3:
	 		echo ("TrÊs");
	 		break;
	 	case 4:
	 		echo ("Quatro");
	 		break;
	 	case 5:
	 		echo ("Cinco");
	 		break;
	 	case 6:
	 		echo ("Seis");
	 		break;
	 	case 7:
	 		echo ("Sete");
	 		break;
	 	case 8:
	 		echo ("Oito");
	 		break;
	 	case 9:
	 		echo ("Nove");
	 		break;
	 	default: // similar ao ultimo else da estrutura if / else aninhado
	 		echo ("<br>Só consigo escrever números entre 0 e 9 por extenso");
	 }
?>