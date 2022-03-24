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
 require_once "./includes/criar-banco.inc.php";       //opcional
 require_once "./includes/abrir-banco.inc.php";       //opcional
 require_once "./includes/definir-charset.inc.php";
 require_once "./includes/criar-tabela1.inc.php";      //opcional
 require_once "./includes/criar-tabela2.inc.php"; 

 //testamos se o botão de CADASTRO foi pressionado
 if(isset($_POST['cadastro-medico']))
 {
   //o botão de cadastro foi pressionado - chamando a include com os comandos de cadastro
   require_once "./includes/cadastrar-medico.inc.php";
   Echo "<p> Dados do médico cadastrados com sucesso no sistema! </p>";   
 }


 if(isset($_POST['cadastro-paciente'])) 
 {
  require_once "./includes/cadastrar-paciente.inc.php";
  Echo "<p> Dados do paciente cadastrados com sucesso no sistema! </p>";
 }

 if(isset($_POST['pesquisa-medico'])) 
 {
  require_once "./includes/pesquisa-medico.inc.php";
 }

  require_once "./includes/desconectar.inc.php";

 ?>

</body> 
</html>
