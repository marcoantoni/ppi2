<?php
// Exemplo didático: demonstração do uso de mysqli_real_escape_string.

// criando variaveis com ', que "quebram as consultas SQL que são concatenadas
$nome = "Tony O'Brian";
$senha = "C3nhaSuperC'3gura!";

// mostrando os dados
echo ("Nome: $nome - Senha: $senha <br>");

echo ("Usando a função mysqli_real_escape_string <br>");



// -----------------------------
// Exemplo de escaping (demonstração)
// -----------------------------
// mysqli_real_escape_string escapa caracteres especiais que poderiam quebrar a sintaxe SQL (como aspas simples). Isso ajuda a reduzir o risco
// de SQL injection quando queries montadas manualmente.
// IMPORTANTE: apesar de útil, isso NÃO substitui o uso de prepared statements.
// mysqli_real_escape_string exige que o primeiro parametro seja o link de conexão com o banco de dados, portanto, será necessário abrir a conexão com o BD e o segundo argumento é a string que será realizado o escape

include ("conecta.php");

$usuario_escape = mysqli_real_escape_string($con, $nome);
$senha_escape   = mysqli_real_escape_string($con, $senha);

// Exibe a query usada para autenticar o usuário, desenvolvida nas aulas anteriores. A consulta SQL gerada executará normalmente, sem quebrar, portanto, as aspas simples não são mais um problema 

echo $sql = "SELECT * FROM usuarios WHERE (email = '$usuario_escape' OR cpf = '$usuario_escape') AND senha = '$senha_escape' ";



?>
