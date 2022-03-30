<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 3 da ListaL2 - Resposta do PHP </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $valorVenda = $_GET["valor-venda"];

  //criar as constante no PHP
  define("PERCENTUAL_DESCONTO", 10/1000);
  define("PERCENTUAL_ICMS", 12/100);
  define("COMISSAO_VENDENDOR", 5/100);

  //calculando o desconto do cliente
  $descontoCliente = $valorVenda * PERCENTUAL_DESCONTO;

  //calculando o valor do ICMS
  $icms = $valorVenda * PERCENTUAL_ICMS;

  //calculando comissao vendedor
  $comissaoVendedor = $valorVenda * COMISSAO_VENDENDOR;


  // fazendo formatação de dados numericos por meio do PHP antes do comando echo
  $valorVendaFormatada = number_format($valorVenda, 2, ",", ".");
  $descontoClienteFormatada = number_format($descontoCliente, 2, ",", ".");
  $icmsFormatada = number_format($icms, 2, ",", ".");
  $comissaoVendedo = number_format($comissaoVendedor, 2, ",", ".");

  //fazendo o PHP devolver um dado de saída ao navegador
  echo "<p> Dados do processamento da venda: <br>
        Percentual de desconto do cliente = <span>",PERCENTUAL_DESCONTO, "</span> <br>
        Percentual de desconto do ICMS = <span>",PERCENTUAL_ICMS, "</span> <br>
        Percentual de comissão do vendedor = <span>",COMISSAO_VENDENDOR, "</span> <br>
        Valor da venda = <span> R$$valorVendaFormatada </span> <br>
        Valor do desconto dado ao cliente = <span> R$$descontoClienteFormatada </span> <br>
        Valor da comissão do vendedor = <span> R$$comissaoVendedo </span> </p>"

?>

</body>
</html>

