<?php
	// arrays.php

	// criando um array de numeros inteiros
	$numeros = [8, 10, 5, 25, 30, 3];

	// como recuperar um valor?
	echo ("O teceiro valor do array é " . $numeros[2]);

	// criando um array misto
	$func1 = ["Milena", 18, 1.58, "01/12/2006", "Técnica em informática"];

	// trocando um valor do array - cargp
	$func1[4] = "Engenheira de software";

	// adicionando valores a um array
	$func1[] = 3589.74;

	echo ("Informações da funcionária 1 <br>");
	echo ("Nome: <b>" . $func1[0] . "</b><br>");
	echo ("Nascimento: <b>" . $func1[3] . "</b><br>");
	echo ("Cargo: <b>" . $func1[4] . "</b><br>");
	// mostrando a nova informação
	echo ("Salário: <b>" . $func1[5] . "</b><br>");

	// outra forma de criar um array
	$func2 = array("Gabriel", 17, 1.79, "15/04/2007", "Programdor web");

	// adicionando cursos do funcionário2
	// embora a posição 10 não exista, o php permite criar um novo indice no array
	$func2[10] = "Introdução ao Java, Introdução ao PHP, Laravel";

	// adicionando um valor ao final do array com array push
	// como já havia sido adicionado um valor na posição 10, o array_push irá inserir o novo valor na posição 11
	array_push($func2, 8000);

	echo ("Informações do funcionário 2 <br>");
	echo ("Nome: <b>" . $func2[0] . "</b><br>");
	echo ("Nascimento: <b>" . $func2[3] . "</b><br>");
	echo ("Cargo: <b>" . $func2[4] . "</b><br>");
	echo ("Salário: <b>" . $func2[11] . "</b><br>");
	echo ("Cursos realizados: <b>" . $func2[10] . "</b><br>");

	// printar um array
	print_r($func2);

	$alunos = ["Henrique", "Iago", "Kleber", "Israel", "Miguel", "Maria", "Julio", "Gustavo", "Fernanda", "Sofia", "Felipe", "Milena", "Julia", "Eduarda", "Gabriel"];

	// quantos alunos existem na turma?
	$nAlunos = count($alunos);
	echo ("A turma da info4 tem $nAlunos alunos: ");

	for ($i=0; $i < count($alunos); $i++){
		echo ("$alunos[$i], ");
	}

	// usando o foreach para iterar sobre o array
	echo ("<br>");	// apenas para separar a linha 

	foreach($alunos as $aluno){
		echo ("$aluno, ");
	}

	// criando uma array associativo
	$func3 = array(
				"nome" => "Julio",
				"nascimento" => "06/07/2006",
				"cargo" => "desenvolvedor frontend",
				"salario" => 6364.87,
				"cidade" => "Parobé"
		);

	echo ("<br>Dados do funcionário 3 <br>");
	// para recupear o indice usa-se valor definido no array entre aspas
	//echo ("Nome: <b>" . $func3["nome"] . "</b><br>");
	echo ("Nome: <b> $func3[nome] </b><br>");
	echo ("Nascimento: <b> $func3[nascimento] </b><br>");
	echo ("Cargo: <b> $func3[cargo] </b><br>");
	echo ("Salário: <b> $func3[salario] </b><br>");
	echo ("Residencia: <b> $func3[cidade] </b><br>");

	// ordenando o array

	// em ordem crescente
	sort($alunos);

	// exibindo o array em ordem alfabética
	print_r($alunos);

	// ordenando de maneira reversa (decfrescente)
	rsort($alunos);
	print_r($alunos);

	// variavel com uma string
	$frutas = "maça, pera, uva, laranja, banana";

	// criando um array onde cada fruta está em uma posição do array
	$array_frutas = explode(", ", $frutas);

	// printando o novo array
	print_r($array_frutas);

?>