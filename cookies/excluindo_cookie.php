<?php
	// excluindo_cookie.php

	// excluindo o cookie "nome" - basta especificar no terceiro parametro um timestamp expirado
	setcookie("nome", "", time() - 300);	// 5 minutos atrás

	setcookie("curso", "", -100);
?>