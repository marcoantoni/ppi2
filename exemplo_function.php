<?php
	// exemplo_function.php

	/* Na aula sobre arrays, percebemos vários códigos repetidos para mostrar as informações de cada funcionário. Esse exemplo traz uma continuação da aula anterior, sendo resolvido com uso de funções para evitar a repetição do código*/

	// Declara uma função chamada mostrarFuncionario que recebe um array associativo $func
	function mostrarFuncionario($func) {
		// Verifica se existe o índice "nome" no array $func e, se existir, exibe o valor
		if (isset($func["nome"])){
			echo ("Nome: <b>$func[nome]</b><br>" );
		}

		// Verifica se existe o índice "nascimento" e exibe
		if (isset($func["nascimento"])){
			echo ("Nascimento: <b>$func[nascimento]</b><br>");
		}

		// Verifica se existe o índice "cargo" e exibe
		if (isset($func["cargo"])){
			echo ("Cargo: <b>$func[cargo]</b><br>");
		}
		
		// Verifica se existe o índice "salario" e exibe
		if (isset($func["salario"])){
			echo ("Salário: <b>$func[salario]</b><br>");
		}

		// Verifica se existe o índice "cidade" e exibe. Isso evita warnings caso o campo não exista.
		if (isset($func["cidade"])){
			echo ("Cidade: <b>$func[cidade]</b><br>");
		}
		
		// Imprime uma linha separadora
		echo ("-----------------------------<br>");
	}

	// Cria um array associativo representando um funcionário
	$func1 = array(
		"nome" => "Milena", 
		"idade" => 18, 
		"altura" => 1.58, 
		"nascimento" => "01/12/2006", 
		"cargo" => "Técnica em informática"
	);

	// Segundo funcionário, com alguns campos diferentes
	$func2 = array(
		"nome" => "Julia",
		"nascimento" => "11/7/2006",
		"cargo" => "Ainda não sei",
		"salario" => 5000
	);

	// Terceiro funcionário, mais completo
	$func3 = array(
		"nome" => "Julio",
		"nascimento" => "06/07/2006",
		"cargo" => "desenvolvedor frontend",
		"salario" => 6364.87,
		"cidade" => "Parobé"
	);

	// Chamada da função mostrarFuncionario para cada um dos funcionários
	mostrarFuncionario($func1);
	mostrarFuncionario($func2);
	mostrarFuncionario($func3);

	// Array com nomes de alunos
	$alunos = ["Henrique", "Iago", "Kleber", "Israel", "Miguel", "Maria", "Julio", "Gustavo", "Fernanda", "Sofia", "Felipe", "Milena", "Julia", "Eduarda", "Gabriel"];

	// Tarefa proposta: criar uma função para dar boas-vindas aos alunos da lista

	// Exemplo de função com retorno: calcula o IMC com base no peso e altura
	function calcularIMC($peso, $altura) {
		$imc = $peso / ($altura * $altura); // fórmula do IMC
		return $imc; // retorna o resultado do cálculo
	}

	// Variáveis com dados fictícios
	$peso_fulano = 72.4;
	$altura_fulano = 1.71;

	// FORMA 1 de exibir o resultado do IMC: armazena o retorno da função em uma variável
	$imc = calcularIMC($peso_fulano, $altura_fulano);
	echo ("Fulano tem o IMC " . $imc );

	// FORMA 2: chama diretamente a função dentro da instrução echo
	echo ("Fulano tem o IMC " . calcularIMC($peso_fulano, $altura_fulano) );
?>