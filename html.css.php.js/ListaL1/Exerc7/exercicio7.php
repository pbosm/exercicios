<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 7 da ListaL1 - resposta do PHP </h1>

 <?php
  $valorInicialCompra = $_POST['valor-compra'];

  //vamos receber, do navegador, o value associado a cada botão de rádio escolhido no formulário. Antes disso, testamos se o botão de rádio foi selecionado. Se sim, guardamos seu value. Se não, enviamos uma mensagem de erro e finalizamos a aplicação

  if(isset($_POST['pagamento-cartao']))
   {
   $pagamentoCartao = $_POST['pagamento-cartao'];    
   //o usuário marcou um botão de rádio. Devemos descobrir se o cliente pagou (ou não) com cartão
   if($pagamentoCartao == "Sim")
    {
    $desconto = $valorInicialCompra * 5/100;
    }
   else
    {
    $desconto = 0;
    }
   }
  else
   {
   echo "<p> AVISO: a modalidade de pagamento deve ser informada. Aplicação encerrada! </p>";
   exit(); //ou die()
   }

  //vamos repetir as mesmas oeprações sobre a modalidade de pagamento, agora, com a entrega a domicílio
  if(isset($_POST['entrega-domicilio']))
   {
   $entregaDomicilio = $_POST['entrega-domicilio'];    
   //o usuário marcou um botão de rádio. Devemos descobrir se o cliente solicitou (ou não) entrega a domicílio
   if($entregaDomicilio == "Sim")
    {
    $acrescimo = $valorInicialCompra * 2/100;
    }
   else
    {
    $acrescimo = 0;
    }
   }
  else
   {
   echo "<p> AVISO: a entrega a domicílio deve ser informada. Aplicação encerrada! </p>";
   die(); //ou exit()
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