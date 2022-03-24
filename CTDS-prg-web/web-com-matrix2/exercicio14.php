<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Vetores em PHP - Exercício 2 da ListaL3 </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST['matric1'];
  $matric2 = $_POST['matric2'];
  $matric3 = $_POST['matric3'];

  //recebendo o nome do aluno a ser pesquisado na matrix
  $alunopesquisado = $_POST['aluno-pesquisado'];

  // criando a matriz
  $matrizalunos[$matric1][0] = $aluno1;
  $matrizalunos[$matric1][1] = $nota1;

  $matrizalunos[$matric2][0] = $aluno2;
  $matrizalunos[$matric2][1] = $nota2;

  $matrizalunos[$matric3][0] = $aluno3;
  $matrizalunos[$matric3][1] = $nota3;

  //visualizar o vetor na web, para entender melhor o vetor
  //echo "<pre>";
  //print_r($vetorPessoas);
  //echo "</pre>";

   // vamos usar o laço especial fornecido pelo PHP
   foreach($matrizalunos as $matricula => $vetorinterno) 
   {
     //criando vetor temporário, para guardar a nota em PRW de cada aluno e agurdamos a matricula
     $vetornotas[$matricula] = $vetorinterno[1];
   }      

   //usando laço especial para encontrar o nome do aluno pesquisado
   foreach($matrizalunos as $matricula => $vetorinterno)
   {
     $vetordenomes[$matricula] = $vetorinterno[0]; 
   }
   //usando uma função para pesquisarmos o nome do aluno
    $matriculadoalunopesquisado = array_search($alunopesquisado, $vetordenomes);
    if ($matriculadoalunopesquisado == false)
    {
      echo "<p> O aluno com o nome <span> $alunopesquisado </span> não foi encontrado na matriz. </p>";
    }
    else 
    {
      $mediadoalunopesquisado = $matrizalunos[$matriculadoalunopesquisado][1];
      echo "<p> Dados do alunos pesquisado na matriz: <br>
            Nome = <span> $alunopesquisado </span> <br>
            Matrícula = <span> $matriculadoalunopesquisado </span> <br>
            Média final de PRW = <span> $mediadoalunopesquisado </span> </p>";
    }

    $maiornota = max($vetornotas);

    $matricmaiornota = array_search($maiornota, $vetornotas);

    $nomealunomaiornota = $matrizalunos[$matricmaiornota][0];

    $media = array_sum($vetornotas)/count($vetornotas); // media das 3 notas cadastradas

    $mediaformatada = number_format($media, 1, ",", ".");

    echo "<p> De acordo com os dados dos alunos cadastrados na matriz, a média final da turma em PRW é <span> $mediaformatada </span> </p>";
    echo "<p> Maior nota encontrada = <span> $maiornota </span> <br>
              Aluno com a maior nota obtida = <span> $nomealunomaiornota </span> <br>
              Matrícula do aluno com a maior nota obtida = <span> $matricmaiornota </span> </p>";
?>


</body>
</html>

