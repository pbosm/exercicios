<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Vetores em PHP - Exercício 7 da ListaL2 </h1>

 <?php
  //recebendo os dados do formulário - criando as variáveis para o PHP  guardar estes dados e processá-los posteriormente
  $idade1 = $_POST['idade1'];
  $idade2 = $_POST['idade2'];
  $idade3 = $_POST['idade3'];

  $pessoa1 = $_POST['pessoa1'];
  $pessoa2 = $_POST['pessoa2'];
  $pessoa3 = $_POST['pessoa3'];

  // criando o vetor de indice numero com os dados armazenados nas três variáveis escalares
  $vetorPessoas[$pessoa1] = $idade1;
  $vetorPessoas[$pessoa2] = $idade2;
  $vetorPessoas[$pessoa3] = $idade3;
  
  // outra forma de criar o vetor
  //$vetornotas[0] = $_POST['nota1'];
  //$vetornotas[1] = $_POST['nota2'];
  //$vetornotas[2] = $_POST['nota3'];
  
  //visualizar o vetor na web, para entender melhor o vetor
  //echo "<pre>";
  //print_r($vetorPessoas);
  //echo "</pre>";

  ksort($vetorPessoas); //ordernar o vetor por ordem alfabetica/ou crescente

  //criando uma tabela
  echo "<table>
        <caption> Relação de pessoas e idades </caption>
        <tr> 
          <th> Pessoa </th>
          <th> Idade </th>   
          </tr>";

   // vamos usar o laço especial fornecido pelo PHP
   foreach($vetorPessoas as $pessoa => $idade) 
   {
     echo "<tr>
            <td> $pessoa </td>
            <td> $idade </td>
            </tr>";
   }      
    
    echo "</table>";

?>


</body>
</html>

