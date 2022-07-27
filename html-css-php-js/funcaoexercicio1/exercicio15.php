<?php
 //área de declaração da função
  function validarnome($aluno)
  {
    //testar uma ferramenta que remove qualquer espaço em branco digitado na caixa nome do aluno
    $aluno = trim($aluno);
    //caso o usuario não digitou nada ou só digitou espaços em branco, essa função ira contar os caracteres
    $numerodecaracteres = strlen($aluno);
    if($numerodecaracteres === 0)
    {
      exit("<p> Caro usuário, o preenchimento do nome é obrigatório! </p>");
    }
  }
  function calcularmedia($nota1, $nota2)
  {
    $mediadoaluno = ($nota1 + $nota2) / 2;
    return $mediadoaluno;
  }
  function verificaraprovacao($media, $aluno)
  {
    if($media >=6 )
    {
      echo "<p> O aluno: <span> $aluno </span> ficou com uma média de = <span> $media </span>. Aluno aprovado! </p>";
    }
    else
    {
      echo "<p> O aluno: <span> $aluno </span> ficou com uma média de = <span> $media </span>. Aluno não foi aprovado! </p>";
    }
  }
?>

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Funções de usuario em PHP - Exercício 1 da listaL4 </h1>

 <?php
  //script principal - recebendo os dados fo formulário
  $aluno = $_POST['aluno'];
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];

  //vamos invocar a primeira função(subrotina) que testa se a caixa nome contém um valor válido
  validarnome($aluno);
  //vamos invocar outra função, que recebe as 2 notas do alunos e devolver sua média
  $media = calcularmedia($nota1, $nota2);
  //vamos invocar mais uma funçãao que recebe o valor da média calculada, e diz se o aluno foi aprovado ou não
  verificaraprovacao($media, $aluno);


?>

</body>
</html>

