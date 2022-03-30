<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Login de usuário </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
	<h1> Login de usuário utilizando sessões em PHP </h1>
	<!--formulário de login-->	
	<form action="index.php" method="post">
  <fieldset>
   <legend> Login </legend>
		 <label class="alinha"> Login: </label>
		 <input type="text" name="login"> <br> <br>
		
		 <label class="alinha"> Senha: </label>
		 <input type="password" name="senha">
		 <br> <br>
		
		 <button type="submit" name="logar"> Efetuar login </button>
     
      <button>
      <a type="submit" name="cadastro" href="cadastro.php"> Cadastrar usuário </a> 
      </button>

  </fieldset>
  
	</form>
	
	<?php
	//acrescentar as includes de conexão com o banco de dados 
 require_once "./includes/dados-conexao.inc.php";
 require_once "./includes/conectar.inc.php";
 require_once "./includes/criar-banco.inc.php";
 require_once "./includes/selecionar-banco.inc.php";
 require_once "./includes/definir-charset.inc.php";
 require_once "./includes/criar-tabela.inc.php";

  if(isset($_POST['logar']))
  {
  require_once "./includes/logar.inc.php";
  }

 require_once "./includes/desconectar.inc.php";		
		
	?>
	
</body>
</html>