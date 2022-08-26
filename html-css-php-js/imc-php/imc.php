<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> IMC </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Calculo do seu IMC </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $altura = $_POST["altura"];
  $peso   = $_POST["peso"];

  //usar um comando do PHP que testa a entrada de dados fornecidos pelo usuario, para ser numero, não letras, esse comando tem outras utilidades
  $altura = filter_var($altura, FILTER_VALIDATE_FLOAT);
  $peso   = filter_var($peso, FILTER_VALIDATE_FLOAT);

  $calculoaltura = $altura * $altura;
  $calculoimc    = $peso / $calculoaltura;


  if($calculoimc < 18.5) {
    echo "<p> Abaixo do peso </p>";
  } elseif ($calculoimc <= 24.9) {
    echo "<p> Peso normal </p>";
  } elseif ($calculoimc <= 29.9) {
    echo "<p> Sobrepeso </p>";
  } elseif ($calculoimc <= 34.9) {
    echo "<p> Obesidade grau 1 </p>";
  } elseif ($calculoimc <=39.9) {
    echo "<p> Obesidade grau 2 </p>";
  } else {
    echo "<p> Obesidade grau 3 </p>";
  }

?>

  <button>
    <a href="index.html">Voltar para página inicial</a>
  </button>

</body>
</html>

