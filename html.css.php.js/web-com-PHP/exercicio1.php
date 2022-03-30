<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 1 da ListaL1 </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $nomeDoAluno = $_POST["aluno"];
  $nota1       = $_POST["nota1"];
  $peso1       = $_POST["peso1"];
  $nota2       = $_POST['nota2'];
  $peso2       = $_POST['peso2'];

  //cálculo da média aritmética ponderada do aluno
  $mediaPonderada = ($nota1*$peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

  //fazendo o PHP devolver um dado de saída ao navegador
  echo "<p> Caro aluno(a) <span> $nomeDoAluno </span>, de acordo com os dados fornecidos, sua média aritmética ponderada em Programação Web é <span> $mediaPonderada </span> </p>"; 
?>


</body>
</html>

