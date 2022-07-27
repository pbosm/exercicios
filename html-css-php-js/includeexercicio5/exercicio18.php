<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Funções de usuario em PHP - Exercício 1 da listaL4 </h1>

 <?php
  //Antes de poder utilizar a chamada da include, devemos indicar o nome e aonde buscar o arquivo
  include "exercicio18.inc.php";
  //script principal - recebendo os dados fo formulário
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];

  //vamos invocar outra função, que recebe as 2 notas do alunos e devolver sua média
  $media = calcularmedia($nota1, $nota2);

  //vamos invocar mais uma funçãao que recebe o valor da média calculada, e diz se o aluno foi aprovado ou não
  verificaraprovacao($media);

?>

</body>
</html>

