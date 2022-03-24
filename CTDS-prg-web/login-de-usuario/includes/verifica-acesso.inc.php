<?php
 //código para validação do acesso ao contéudo restrito, por meio do uso das variáveis de sessão. Esta validação deve estar presente em TODAS as páginas de conteúdo reservado
 session_start();

 //teste para validarmos o acesso do usuário ao conteúdo restrito
 if(!isset($_SESSION['conectado']) OR $_SESSION['conectado'] != true)
  {
  //temos um acesso indevido do usuário. Encerramos a aplicação
  exit("<p> Caro usuário, antes de acessar este conteúdo restrito, você deve efetuar o cadastro ou passar pela validação de login. Aplicação encerrada! <a href='cadastro.php' title='Retornar ao cadastro'> Ir para o cadastro de usuário </a>");
  }