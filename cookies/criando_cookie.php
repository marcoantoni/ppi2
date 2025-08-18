<?php
	// criando_cookie.php
	

	// a função setcookie é responsável pela criação de um cookie - o primeiro parametro indica o nome do cookie e o segundo é o valor associado a ele
	setcookie("nome", "Marco");

	// criando um cookie e especificando sua validade
	setcookie("curso", "Técnico em Informática", time() + 300);
?>