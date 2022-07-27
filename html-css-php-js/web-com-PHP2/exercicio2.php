<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 2 da ListaL2 - Resposta do PHP </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $distancia = $_POST["distancia"];
  $consumo   = $_POST["autonomia"];
 // fazendo direto no difine $preco     = $_POST["preco-litro"];

  //convertendo o preço da gasolina em uma constante no PHP
  define("PRECO_DA_GASOLINA", $_POST["preco-litro"]);

  //cálcular a quantidade de litros de combustível gastos na viagem
  $litrosGastos = $distancia / $consumo;

  //calcular o valor em dinheiro gasto com a viagem
  $gastoEmDinheiro = $litrosGastos * PRECO_DA_GASOLINA;

  // fazendo formatação de dados numericos por meio do PHP antes do comando echo
  $litrosGastosFormatada = number_format($litrosGastos, 1, ",", ".");
  $gastoEmDinheiroFormatada = number_format($gastoEmDinheiro, 2, ",", ".");

  //fazendo o PHP devolver um dado de saída ao navegador
  echo "<p> Dados do processamento da viagem: <br>
         Valor em dinheiro gasto na viagem: <span> R$$gastoEmDinheiroFormatada  </span> <br>
         Quantidade de litros gastos de combustível: <span> $litrosGastosFormatada litros(s) </span> <br>
         Preço pago por litro de gasolina: <span> R$", PRECO_DA_GASOLINA, "</span> </p>";
?>


</body>
</html>

