<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Vetores em PHP - Exercício 2 da ListaL2 </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  // criando o vetor de indice numero com os dados armazenados nas três variáveis escalares
  $vetornotas[$aluno1] = $nota1;
  $vetornotas[$aluno2] = $nota2;
  $vetornotas[$aluno3] = $nota3;
  // outra forma de criar o vetor
  //$vetornotas[0] = $_POST['nota1'];
  //$vetornotas[1] = $_POST['nota2'];
  //$vetornotas[2] = $_POST['nota3'];
  //visualizar o vetor na web, para entender melhor o vetor
  //echo "<pre>";
  //print_r($vetornotas);
  //echo "</pre>";

  //criando uma tabela
  echo "<table>
        <caption> Relação de alunos e respectivas notas de PRW </caption>
        <tr> 
          <th> Aluno </th>
          <th> Nota </th>   
          </tr>";

   // vamos usar o laço especial fornecido pelo PHP
   foreach($vetornotas as $aluno => $nota) 
   {
     echo "<tr>
            <td> $aluno </td>
            <td> $nota </td>
            </tr>";
   }      
    
    echo "</table>";

    ///Descobrir qual aluno tem a maior nota, utilizando um função do PHP
    $maiornota = max($vetornotas);

    //função busca pela maior nota e retorna o nome do aluno
    $alunomaiornota = array_search($maiornota, $vetornotas);

    echo "<p> Resultado da busca do aluno-destaque da turma: <br>
              Nome do aluno = <span> $alunomaiornota </span> <br>
              Maior nota = <span> $maiornota </span> </p>";
       

  //calcular a média
  $soma = array_sum($vetornotas);
  $media = $soma / count($vetornotas);

  $mediaformatada = number_format($media, 1, ",", ".");

  echo "<p> De acordo com as notas fornecidas a média da turma é <span> $mediaformatada </span> </p>"

?>


</body>
</html>

