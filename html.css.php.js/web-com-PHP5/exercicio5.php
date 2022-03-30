<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Fundamentos de PHP - Exercício 5 da ListaL2 - Resposta do PHP </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $quantosdolares = $_POST["quantos-dolares"];

  //criar as constante no PHP
  define("taxa_dolar", 5.72);

  $quantosreais = $quantosdolares * taxa_dolar;

  // fazendo formatação de dados numericos por meio do PHP antes do comando echo
  $quantosdolaresFormatada = number_format($quantosdolares, 2, ",", ".");
  $quantoReaisFormatada = number_format($quantosreais, 2, ",", ".");


  //fazendo o PHP devolver um dado de saída ao navegador
  echo "<p> Dados da conversão de câmbio: <br>
        Quantia em dólares a ser convertida = <span> $$quantosdolaresFormatada </span> <br>
        Quantia em reais após a conversão = <span> R$$quantoReaisFormatada </span> <br>
        Valor da taxa de câmbio = <span>",taxa_dolar, "</span> </p>";


?>

</body>
</html>

