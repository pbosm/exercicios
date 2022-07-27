<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 8 da ListaL1 - resposta do PHP </h1>

 <?php
  $valorInicialCompra = $_POST['valor-compra'];

  //vamos receber, do navegador, o value associado ao primeiro checkbox. Antes disso, testamos, com a função isset(), se o checkbox relacionado à forma de pagamento foi marcado (ou não). Se marcado, adicionamos um desconto de 5%. Caso contrário, o desconto é zero

  if(isset($_POST['pagamento-cartao']))
   {
   //descobrimos que o cliente pagou com cartão
    $desconto = $valorInicialCompra * 5/100;
   }
  else
   {
   $desconto = 0;
   }



  //vamos repetir as mesmas operações sobre a modalidade de pagamento, agora, com a entrega a domicílio
  if(isset($_POST['entrega-domicilio']))
   {
   //o cliente solicitou entrega a domicílio
   $acrescimo = $valorInicialCompra * 2/100;
   }
  else
   {
   $acrescimo = 0;
   }
   
  //calculando o valor final da compra do cliente, de acordo com os descontos e acréscimos
  $valorFinalCompra = $valorInicialCompra - $desconto + $acrescimo;

  $descontoFormatado         = number_format($desconto, 2, ",", ".");
  $acrescimoFormatado        = number_format($acrescimo, 2, ",", ".");
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
  $valorInicialCompraFormatado = number_format($valorInicialCompra, 2, ',', '.');

  echo "<p> Resultado do processamento da compra do cliente: <br>
  Valor inicial da compra = <span> R$$valorInicialCompraFormatado </span> <br>
  valor do desconto concedido = <span> R$$descontoFormatado </span> <br>
  Valor do acréscimo cobrado = <span> R$$acrescimoFormatado </span> <br>
  Valor final da compra = <span> R$$valorFinalCompraFormatado </span> </p>";
 ?> 
</body>
</html>