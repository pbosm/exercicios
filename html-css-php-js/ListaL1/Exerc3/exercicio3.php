<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 3 da ListaL1 - resposta do PHP </h1>

 <?php
  //receber os dados do formulário via GET
  $valorVenda  = $_GET["valor-venda"];

  //criar as constantes que representam os percentuais dados
  define("PERCENTUAL_DESCONTO", 10/100);
  define('PERCENTUAL_ICMS', 12/100);
  define('COMISSAO_VENDEDOR', 5/100);

  //calculando o desconto obetido pelo cliente
  $descontoCliente = $valorVenda * PERCENTUAL_DESCONTO;

  //calculando o valor do ICMS
  $icms = $valorVenda * PERCENTUAL_ICMS;

  //calculando a comissão do vendedor
  $comissaoVendedor = $valorVenda * COMISSAO_VENDEDOR;

  //fazendo a formatação dos dados numéricos
  $valorVendaFormatado       = number_format($valorVenda, 2, ",", ".");
  $descontoClienteFormatado  = number_format($descontoCliente, 2, ",", ".");
  $icmsFormatado             = number_format($icms, 2, ",", ".");
  $comissaoVendedorFormatada = number_format($comissaoVendedor, 2, ",", ".");

  //fazendo o PHP devolver um dado de saída ao navegador
  echo "<p> Dados do processamento da venda: <br>
        Percentual de desconto do cliente = <span>", PERCENTUAL_DESCONTO, "</span> <br>
        Percentual de desconto do ICMS = <span>", PERCENTUAL_ICMS, "</span> <br>
        Percentual de comissão do vendedor = <span>", COMISSAO_VENDEDOR, "</span> <br>
        Valor da venda = <span> R$$valorVendaFormatado </span> <br>
        Valor do desconto dado ao cliente = <span> R$$descontoClienteFormatado </span> <br>
        Valor da comissão do vendedor = <span> R$$comissaoVendedorFormatada </span> </p>";
 ?> 
</body>
</html>