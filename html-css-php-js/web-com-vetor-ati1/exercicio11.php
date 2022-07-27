<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Vetores em PHP - Exercício 1 da ListaL2 </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];
  // criando o vetor de indice numero com os dados armazenados nas três variáveis escalares
  $vetornotas[0] = $nota1;
  $vetornotas[1] = $nota2;
  $vetornotas[2] = $nota3;
  // outra forma de criar o vetor
  $vetornotas[0] = $_POST['nota1'];
  $vetornotas[1] = $_POST['nota2'];
  $vetornotas[2] = $_POST['nota3'];
  //visualizar o vetor na web, para entender melhor o vetor
  //echo "<pre>";
  //print_r($vetornotas);
  //echo "</pre>";

  //calcular a média
  $soma = array_sum($vetornotas);
  $media = $soma / count($vetornotas);

  $mediaformatada = number_format($media, 1, ",", ".");

  echo "<p> De acordo com as notas fornecidas a média da turma é <span> $mediaformatada </span> </p>"

?>


</body>
</html>

