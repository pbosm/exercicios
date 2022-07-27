<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 9 da ListaL2 - Resposta do PHP </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $valorinicialcompra = $_POST["valor-compra"];

  // usar um comando do PHP que testa a entrada de dados fornecidos pelo usuario, para ser numero, não letras, esse comando tem outras utilidades
  $valortestado = filter_var($valorinicialcompra, FILTER_VALIDATE_FLOAT);
  // testar se o dado é valido ou não
  if($valortestado === false OR $valortestado < 0)
  {
    exit("<p> Você deve fornecer um valor válido para a compra do Usuário. Aplicação encerrada
    ! Tente novamente! </p>");
  }
  //taxa de desconto e tava de acrescimo por constantes
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);
  $desconto = 0;
  $acrescimo = 0;

  //receber do navegador o value associado a cada escolha no botão, e caso dê algum erro enviar mensagem
  if(isset($_POST["forma-pagamento"]))
  {
    $formapagamento = $_POST["forma-pagamento"];

    if($formapagamento == "Sim")
    {
      $desconto = $valorinicialcompra * TAXA_DESCONTO; //á vista
    }
    else
    {
      $acrescimo = $valorinicialcompra * TAXA_ACRESCIMO; //a prazo
    }
  }
  else
  {
    exit("<p> Aviso: a forma pagamento deve ser informado. </p>");
  }
    
  // testando checkbox
  if(isset($_POST["pagamento-cartao"]))
  {
    $sorteio = "O cliete pagou com cartão Visa e está concorrendo ao sorteio do automóvel.";
  }
  else
  {
    $sorteio = "O cliete NÃO pagou com cartão Visa e não está concorrendo ao sorteio do automóvel.";
  }


    //calculando o valor final
    $valorfinalcompra = $valorinicialcompra - $desconto + $acrescimo;
    //formatando
    $descontoFormatado = number_format($desconto, 2, ",", ".");
    $acrescimoFormatado = number_format($acrescimo, 2, ",", ".");
    $valorFinalCompraFormatado = number_format($valorfinalcompra, 2, ",", ".");
    $valorinicialCompraFormatado = number_format($valorinicialcompra, 2, ",", ".");

    echo "<p> Resultado do processamento da compra do cliente <br>
    Valor inicial da compra = <span> R$$valorinicialCompraFormatado </span> <br>
    Valor do desconto concedido = <span> R$$descontoFormatado </span> <br>
    Valor do acrescimo = <span> R$$acrescimoFormatado </span> <br>
    Valor Final da compra = <span> R$$valorFinalCompraFormatado </span> 
    $sorteio </p>";
?>

</body>
</html>

