<?php 
//comando para consultado ao MYSQL que conte e devolva ao PHP o número de alunos aprovados em PRW
$sql = "SELECT descricao FROM $nomeDaTabela WHERE estoque = (SELECT MIN(estoque) FROM $nomeDaTabela)";
$resultado = $conexao->query($sql);

$registro = $resultado->fetch_array();
$descricao = $registro[0];
$descricao = htmlentities($descricao, ENT_QUOTES, "UTF-8");

echo "<p> O descrição do produto com a menor quantidade de estoque armanezado no banco de dados é a seguinte: <span> $descricao </span> </p>";

?>