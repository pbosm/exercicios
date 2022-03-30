<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 8 da ListaL2 - Resposta do PHP </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $valorinicialcompra = $_POST["valor-compra"];


  //receber do navegador o value associado a cada escolha no botão, e caso dê algum erro enviar mensagem
    if(isset($_POST["pagamento-cartao"]))
    {
      $desconto = $valorinicialcompra * 5/100;
    }
    else
    {
      $desconto = 0;
    }

    // reutilizar 
      if(isset($_POST["entrega_domicilio"]))
      {
        $acrescimo = $valorinicialcompra * 2/100;
      }
      else
      {
        $acrescimo = 0;
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
    Valor Final da compra = <span> R$$valorFinalCompraFormatado </span> </p>";
?>

</body>
</html>

