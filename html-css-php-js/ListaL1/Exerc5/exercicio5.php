<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 5 da ListaL1 - resposta do PHP </h1>

 <?php
  $quantosDolares  = $_POST["quantos-dolares"];
  
  define("TAXA_DE_CAMBIO", 5.72);

  $quantosReais = $quantosDolares * TAXA_DE_CAMBIO;

  $quantosDolaresFormatado   = number_format($quantosDolares, 2, ",", ".");
  $QuantosReaisFormatado     = number_format($quantosReais, 2, ",", ".");

  echo "<p> Dados da conversão de câmbio: <br>
        Quantia em dólares a ser convertida = <span> $$quantosDolaresFormatado </span> <br>
        Quantia em reais após a conversão = <span> R$$QuantosReaisFormatado </span> <br>
        Valor da taxa de câmbio = <span>", TAXA_DE_CAMBIO, "</span> </p>";
 ?> 
</body>
</html>