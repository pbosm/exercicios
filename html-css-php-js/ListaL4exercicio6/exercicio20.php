<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário em PHP - Exercício 6 da ListaL4 </h1>

 <?php 
 //inserindo a include
 require_once "exercicio20.inc.php";
 
 //script principal - definindo as subrotinas
  $idade = $_POST['idade'];
  
  validaridade($idade); 

  //função que testará a idade do eleitor, se esta apto a votar
  testaaptovotar($idade);

 ?>

</body>
</html>

