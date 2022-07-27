<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Fundamentos de PHP - Atividade 10 ListaL1 - Resposta do PHP </h1>

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

  //taxa de desconto constantes
  define("TAXA_DESCONTO55", 0/100);
  define("TAXA_DESCONTO5570", 5/100);
  define("TAXA_DESCONTO70", 7/100);
  $desconto = 0;

  // PAGAMENTO NORMAL 

  if(isset($_POST["pagamento"]))   //pagamento até 55
  {
    $pagamento = $_POST["pagamento"];
    if($pagamento == "pagamento-55")
    {
      $desconto = $valorinicialcompra * TAXA_DESCONTO55;
    }
  }
  else
  {
    exit("<p> Aviso: a declaração de idade deve ser informada. </p>");
  }  

  if(isset($_POST["pagamento"]))  //pagamento entre 55 e 70 anos
  {
    $pagamento = $_POST["pagamento"];
    if($pagamento == "pagamento-55-70")
    {
      $desconto = $valorinicialcompra * TAXA_DESCONTO5570; 
    }
  }

  if(isset($_POST["pagamento"]))  //pagamento entre 55 e 70 anos
  {
    $pagamento = $_POST["pagamento"];
    if($pagamento == "pagamento-70")
    {
      $desconto = $valorinicialcompra * TAXA_DESCONTO70; 
    }
  }

   //PAGAMENTO CARTÃO

   if(isset($_POST["pagamento-cartao"]))
   if($pagamento == "pagamento-55")
   {
     $desconto = $valorinicialcompra * 5/100;
   }

   if(isset($_POST["pagamento-cartao"]))
   if($pagamento == "pagamento-55-70")
   {
     $desconto = $valorinicialcompra * 10/100;
   }

   if(isset($_POST["pagamento-cartao"]))
   if($pagamento == "pagamento-70")
   {
     $desconto = $valorinicialcompra * 12/100;
   }


    //calculando o valor final
    $valorfinalcompra = $valorinicialcompra - $desconto;

    //formatando
    $descontoFormatado = number_format($desconto, 2, ",", ".");
    $valorFinalCompraFormatado = number_format($valorfinalcompra, 2, ",", ".");
    $valorinicialCompraFormatado = number_format($valorinicialcompra, 2, ",", ".");

    echo "<p> Resultado do processamento da compra do cliente <br>
    Valor inicial da compra = <span> R$$valorinicialCompraFormatado </span> <br>
    Valor do desconto concedido = <span> R$$descontoFormatado </span> <br>
    Valor Final da compra = <span> R$$valorFinalCompraFormatado </span> </p>";
?>

</body>
</html>

