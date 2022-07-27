<?php
 //área de declaração dos módulos
 function validarvenda($valorvenda)
  {
  $valorTestado = filter_var($valorvenda, FILTER_VALIDATE_FLOAT);

  if($valorTestado === false)
   {
   exit("<p> ATENÇÃO: o valor da venda deve ser informada. Aplicação encerrada! </p>");
   }
  }

 //====================================================================

 function validarcomissao($percentual)
      {
      $valorcomissao = filter_var($percentual, FILTER_VALIDATE_FLOAT);
    
      if($valorcomissao === false)
       {
       exit("<p> ATENÇÃO: o valor da comissão do vendedor deve ser informada. Aplicação encerrada! </p>");
       }
      }

 //====================================================================     
 function calcularcomissao($valorvenda, $percentual)
 {
      $comissao = $valorvenda * $percentual/100;
      return $comissao;
 } 
 //==================================================================== 
 function calculardescontodocliente($valorvenda)
 {
      define("TAXA_DESCONTO", 5/100);
      $pagoucomcartao = isset($_POST['modalidade-cartao']);

      $desconto = 0;

      if($pagoucomcartao === true)
      {
      $desconto = $valorvenda * TAXA_DESCONTO;
      }
      return $desconto;
 }
 //====================================================================
 function calcularvalorfinal($valorvenda, $descontodocliente)
 {
      $valorfinal = $valorvenda - $descontodocliente;
      return $valorfinal;
 }
 //====================================================================
 function saidadosresultados($valorvenda, $percentual, $valordacomissao, $descontodocliente, $valorfinalvenda)
 {
     $valorvendaformatada = number_format($valorvenda, 2, ",", "."); 
     $percentualformatada = number_format($percentual, 1, ",", ".");  
     $valordacomissaoformatada = number_format($valordacomissao, 2, ",", "."); 
     $descontoformatada = number_format($descontodocliente, 2, ",", "."); 
     $valorfinalformatada = number_format($valorfinalvenda, 2, ",", "."); 
     
     echo "<p> Caro usuário, após o processamento da venda efetuada, temos os seguintes resultados : <br>
     Valor inicial da venda = <span> R$$valorvendaformatada </span> <br>
     Percentual de comissão do vendedor = <span> R{$percentualformatada}% </span> <br>
     Valor da comissão ao vendedor = <span> R$$valordacomissaoformatada </span> <br>
     Valor do desconto dado ao cliente = <span> R$$descontoformatada </span> <br>
     Valor final da venda ao cliente = <span> R$$valorfinalformatada </span> </p>";
 }
  
 ?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário em PHP - Exercício 4 da ListaL4 </h1>

 <?php 
  //script principal - definindo as subrotinas
  $valorvenda = $_POST['valor-venda'];
  $percentual = $_POST['percentual-comissao'];
  
  $valordacomissao = calcularcomissao($valorvenda, $percentual);
  $descontodocliente = calculardescontodocliente($valorvenda);
  $valorfinalvenda = calcularvalorfinal($valorvenda, $descontodocliente);


  //Caso o usuario não tenha colocado nada nessa caixa, aparecer mensagem dizendo para informar o numero
  validarvenda($valorvenda); 

  //Caso o usuario não tenha colocado nada nessa caixa, aparecer mensagem dizendo para informar o numero
  validarcomissao($percentual);

  //Mostrando os resultados das variaveis
  saidadosresultados($valorvenda, $percentual, $valordacomissao, $descontodocliente, $valorfinalvenda);

 ?> 
</body>
</html>

