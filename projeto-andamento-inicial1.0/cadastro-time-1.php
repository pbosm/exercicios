<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integração de banco de dados no PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Integração de banco de dados no PHP - exercicio 1 </h1>

 <?php

 //chamando includes
 require_once "./includes/dados-conexao.inc.php";
 require_once "./includes/conectar.inc.php";
 require_once "./includes/criar-banco.inc.php";
 require_once "./includes/selecionar-banco.inc.php";
 require_once "./includes/definir-charset.inc.php";
 require_once "./includes/criar-tabela-1.inc.php";     

 //testamos se o botão de CADASTRO foi pressionado
 if(isset($_POST['cadastro']))
 {
   //o botão de cadastro foi pressionado - chamando a include com os comandos de cadastro
   require_once "./includes/dados-time.inc.php";
   Echo "<p> Cadastro Efetuado ! </p>";   
 }

 require_once "./includes/desconectar.inc.php";

 ?>

</body> 
</html>