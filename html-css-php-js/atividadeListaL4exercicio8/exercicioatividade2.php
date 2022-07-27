<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> ATIVIDADE 30 - exercício avaliativo 8 da ListaL4 </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> ATIVIDADE 30 - exercício avaliativo 8 da ListaL4 </h1>

 <?php

  require_once "exercicioatividade2.inc.php"; //include

  //script principal - recebendo os dados fo formulário
  $aluno = $_POST['aluno'];
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3']; 
  
  
  //vamos testar  qual opção o usuário quer utilizar
  $media = $_POST['media'];

  if($media == "mediasimples")
   {
   //indo calcular a media simples na function que esta na include
   calcularmediasimples($aluno, $nota1, $nota2, $nota3);
   }
  else
   {
   //indo calcular a media ponderada na function que esta na include
   calcularmediaponderada($aluno, $nota1, $nota2, $nota3);
   } 
   
?>

</body>
</html>

