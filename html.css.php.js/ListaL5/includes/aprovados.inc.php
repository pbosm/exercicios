<?php 
//comando para consultado ao MYSQL que conte e devolva ao PHP o número de alunos aprovados em PRW
$sql = "SELECT COUNT(*) FROM $nomeDaTabela WHERE media >=6";
$resultado = $conexao->query($sql);

$registro = $resultado->fetch_array();
$numeroAprovados = $registro[0];
$numeroAprovados = htmlentities($numeroAprovados, ENT_QUOTES, "UTF-8");

echo "<p> O número de alunos aprovados na UC PRW é igual a <span> $numeroAprovados </span> aluno(s) </p>";

?>