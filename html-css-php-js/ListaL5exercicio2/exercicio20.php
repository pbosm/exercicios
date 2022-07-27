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
 require_once "./includes/criar-tabela.inc.php";      //opcional

 //testamos se o botão de CADASTRO foi pressionado
 if(isset($_POST['cadastro']))
 {
   //o botão de cadastro foi pressionado - chamando a include com os comandos de cadastro
   require_once "./includes/cadastrar.inc.php";
   Echo "<p> Dados do produto cadastrados com sucesso no sistema! </p>";   
 }


 if(isset($_POST['executar-operacao'])) 
 {
   //testar qual operação foi escolhida pelo usuário no formulário
   $operacao = $_POST['operacao'];

   if($operacao == "1") //saber qual botão o usuário escolheu
   {
    require_once "./includes/listar-dados.inc.php";
   }
   elseif($operacao == "2") //saber qual botão o usuário escolheu
   {
    require_once "./includes/mostrar-descricao.inc.php";
   }
   else
   {
    require_once "./includes/calcular-faturamento.inc.php";
   }
 }

  require_once "./includes/desconectar.inc.php";

 ?>

</body> 
</html>
