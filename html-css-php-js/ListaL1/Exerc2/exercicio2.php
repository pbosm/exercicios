<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 2 da ListaL1 - resposta do PHP </h1>

 <?php
  $distancia   = $_POST["distancia"];
  $consumo     = $_POST["autonomia"];

  //convertendo o preço da gasolina em uma constante no PHP
  define("PRECO_DA_GASOLINA", $_POST['preco-litro']);

  //calcular a quantidade de litros de combustível gastos na viagem
  $litrosGastos = $distancia / $consumo; 

  //calcular o valor em dinheiro gasto com a viagem
  $gastoEmDinheiro = $litrosGastos * PRECO_DA_GASOLINA;

  //fazendo a formatação de dados numéricos por meio do PHP ANTES do comando echo
  $litrosGastosFormatado    = number_format($litrosGastos, 1, ",", ".");
  $gastoEmDinheiroFormatado = number_format($gastoEmDinheiro, 2, ",", ".");


  //fazendo o PHP devolver um dado de saída ao navegador
  echo "<p> Dados do processamento da viagem: <br>
        Valor em dinheiro gasto na viagem: <span> R$$gastoEmDinheiroFormatado </span> <br>
        Quantidade de litros gastos de combustível: <span> $litrosGastosFormatado litro(s) </span> <br>
        Preço pago por litro de gasolina: <span> R$", PRECO_DA_GASOLINA, "</span> </p>"; 
 ?> 
</body>
</html>