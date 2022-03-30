<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário e include em PHP - Exercício 7 da ListaL4 </h1>

 <?php 
  //inserindo a include
  require_once "exercicio21.inc.php";
  
  //script principal - recebendo os dados do formulário
  $temperatura = $_POST['temperatura'];

  //vamos invocar a primeira função (subrotina) que testa se a caixa da tenperatura contém um valor válido
  validarTemperatura($temperatura); 

  //vamos invocar outra função que testa se o usuário selecionou algum botão de rádio
  validarEscalaTermométrica();

  //vamos testar  qual escala termométrica o usuário quer utilizar
  $escala = $_POST['escala'];

  if($escala == "deCparaF")
   {
   //invocamos um módulo que converte a temperatura dada de C para F
   converterDeCparaF($temperatura);
   }
  else
   {
   //invocamos um módulo que converte a temperatura dada de F para C
   converterDeFparaC($temperatura);
   } 
 ?> 
</body>
</html>

