<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Conteúdo privado </title> 
  <link rel="stylesheet" type="text/css" href="style.css">>
</head> 

<body> 
 <?php
  require_once "./includes/verifica-acesso.inc.php";
 ?>
	<h1> Bem-vindo, administrador. Aqui, você pode ter acesso a funções privadas do seu sistema. </h1>
 <form action="./includes/logout.inc.php" method="post">
  <fieldset>
   <legend> Desconectar </legend>
   <button> Clique aqui para fazer o logout </button>
  </fieldset>
 </form>

</body>
</html>