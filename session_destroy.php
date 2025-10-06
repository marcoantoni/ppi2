<?php
	// arquivo session_destroy

	// mesmo que a ideia é encerrar a sessão, ela deve ser iniciada
	session_start();

	// função responsável por excluir todas as variaveis de sessão e encerrá-la
	session_destroy();
?>