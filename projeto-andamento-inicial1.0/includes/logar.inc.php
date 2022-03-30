<?php
  $login   = trim($conexao->escape_string($_POST['login']));
  $senha   = trim($conexao->escape_string($_POST['senha']));

  //antes de buscar estes dados no banco de dados, vamos cripitografá-los
  $senhaCripto = hash("sha512", $senha);
  $loginCripto = hash("sha512", $login);

  $sql = "SELECT login, senha FROM usuarios WHERE login = '$loginCripto' AND senha = '$senhaCripto'";

  $conexao->query($sql);

  //testando se a consulta foi bem-sucedida e que valor retornou do banco de dados
  if($conexao->affected_rows <= 0)
   {
   exit("<p> Dados de login incorretos. Aplicação encerrada! Tente novamente! </p>");
   }

  //se o PHP chegar até aqui, significa que o login foi bem-sucedido. O que fazemos é criar, novamente, a variável de sessão
  session_start();
  $_SESSION["conectado"] = true;

  header("location: pagina-home.php"); //tudo certo, indo para essa página <