<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Login de usuário - Cadastro </title> 
  <link rel="stylesheet" href="formata-formulario1.css">
</head> 

<body> 
	<h1> Cadastro de usuário com sessões em PHP </h1>
	
	<form action="cadastro.php" method="post">
  <fieldset>
   <legend> Cadastro </legend>
		 <label class="alinha"> Nome completo: </label>
		 <input type="text" name="nome" autofocus required> <br> <br>
		
		 <label class="alinha"> E-mail: </label>
		 <input type="email" name="email" required> <br> <br>
		
		 <label class="alinha"> Login: </label>
		 <input type="text" name="login" required > <br> <br>
		
		 <label class="alinha"> Senha: </label>
		 <input type="password" name="senha" required> 
		
		 <button type="submit" name="cadastrar"> Cadastrar usuário </button>
  </fieldset>
	</form>
	
	<?php
	//includes de conexão com o banco de dados
  require_once "./includes/dados-conexao.inc.php";
  require_once "./includes/conectar.inc.php";
  require_once "./includes/criar-banco.inc.php";
  require_once "./includes/selecionar-banco.inc.php";
  require_once "./includes/definir-charset.inc.php";
  require_once "./includes/criar-tabela.inc.php";

  if(isset($_POST['cadastrar']))
   {
   require_once "./includes/cadastrar.inc.php";
   }

  require_once "./includes/desconectar.inc.php";		
	?>	
</body>
</html>