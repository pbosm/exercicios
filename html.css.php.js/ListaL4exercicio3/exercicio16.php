<?php
 //área de declaração dos módulos
 function validarTemperatura($temperatura)
  {
  $valorTestado = filter_var($temperatura, FILTER_VALIDATE_FLOAT);

  if($valorTestado === false)
   {
   exit("<p> ATENÇÃO: o valor da temperatura deve ser um número. Aplicação encerrada! </p>");
   }
  }

 //====================================================================

 function validarEscalaTermométrica()
  {
  $escolheuBotao = isset($_POST['escala']);
  if($escolheuBotao === false)
   {
   exit("<p> ATENÇÃO: caro usuário, você deve escolher qual escala termométrica será utilizada na conversão da temperatura. Aplicação encerrada! </p>");
   }  
  }

 //===================================================================

 function converterDeCparaF($temperatura)
  {
  $tempF = ($temperatura * 9/5) + 32;
  $tempFFormatada = number_format($tempF, 1, ",", ".");
  $temperaturaFormatada = number_format($temperatura, 1, ",", ".");
  echo "<p> Dados da conversão termométrica: <br>
        Tipo de conversão selecionado: de Celsius para Fahrenheit. <br>
        Valor da temperatura em Celsius: <span> {$temperaturaFormatada}°C </span> <br>
        Valor da temperatura convertida para Fahrenheit: <span> {$tempFFormatada}°F </span> </p>";  
  }

 //====================================================================

 function converterDeFparaC($temperatura)
  {
  $tempC = ($temperatura - 32) * 5/9;
  $tempCFormatada = number_format($tempC, 1, ",", ".");
  $temperaturaFormatada = number_format($temperatura, 1, ",", ".");
  echo "<p> Dados da conversão termométrica: <br>
        Tipo de conversão selecionado: de Fahrenheit para Celsius. <br>
        Valor da temperatura em Fahrenheit: <span> {$temperaturaFormatada}°F </span> <br>
        Valor da temperatura convertida para Celsius: <span> {$tempCFormatada}°C </span> </p>";  
  }
 ?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário em PHP - Exercício 3 da ListaL4 </h1>

 <?php 
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

