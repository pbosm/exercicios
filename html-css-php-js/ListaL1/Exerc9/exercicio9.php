<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 9 da ListaL1 - resposta do PHP </h1>

 <?php
  $valorInicialCompra = $_POST['valor-compra'];

  /*neste ponto, vamos usar um comando do PHP que testa a entrada de dados fornecidos pelo usuário no formulário. Neste exemplo, testaremos se um dado é um número. Porém, o comando usado aqui serve para testarmos uma outra infinidade de tipos de dados diferentes. Se o dado testado estiver correto, o comando filter_var() devolve na variável do lado esquerdo o próprio valor fornecido pelo usuário na caixa testada. Se o teste falhar, a função retorna o valor false*/
  $valorTestado = filter_var($valorInicialCompra, FILTER_VALIDATE_FLOAT);

  //em seguida, testamos se o dado é inválido e encerramos a aplicação, no caso de dado incorreto
  if($valorTestado === false OR $valorTestado < 0)
   {
   exit("<p> Você deve fornecer um valor válido para a compra do usuário. Aplicação encerrada! Tente novamente! </p>");
   }

  //representamos a taxa de desconto e a taxa de acréscimo por CONSTANTES
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);
  $desconto = 0;
  $acrescimo = 0;

  if(isset($_POST['forma-pagamento']))
   {
   $formaPagamento = $_POST['forma-pagamento'];    

   if($formaPagamento === "0") //à vista
    {
    $desconto = $valorInicialCompra * TAXA_DESCONTO;
    }
   else
    {
    $acrescimo = $valorInicialCompra * TAXA_ACRESCIMO; //a prazo
    }
   }
  else
   {
   exit("<p> AVISO: a forma de pagamento deve ser informada. Aplicação encerrada! </p>");
   }

  //testando o checkbox
  if(isset($_POST['pagamento-cartao']))
   {
   $sorteio = "O cliente pagou com cartão Visa e está concorrendo ao sorteio do automóvel.";
   }
  else
   {
   $sorteio = "O cliente NÃO pagou com cartão Visa e não está concorrendo ao sorteio do automóvel.";  
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
  Valor final da compra = <span> R$$valorFinalCompraFormatado </span> <br>
  $sorteio </p>";
 ?> 
</body>
</html>