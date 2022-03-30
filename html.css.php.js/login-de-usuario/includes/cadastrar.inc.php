<?php
 $nome    = trim($conexao->escape_string($_POST['nome']));
 $email   = trim($conexao->escape_string($_POST['email']));
 $login   = trim($conexao->escape_string($_POST['login']));
 $senha   = trim($conexao->escape_string($_POST['senha']));

 $senhaCripto = hash("sha512", $senha);
 $loginCripto = hash("sha512", $login);

 //antes de continuarmos o cadastro, vamos nos certificar que não existe nenhum outro usuário com este mesmo login já cadastrado no banco de dados. 
 //Verificação semelhante pode ser feita em relação ao campo do e-mail
 $sql = "SELECT login, email FROM $nomeDaTabela WHERE login = '$loginCripto' OR email = '$email'";

 $conexao->query($sql);

 //testando a condição de erro para o cadastro. Se o PHP receber do MySQL o valor 1 para a consulta anterior, significa que o MySQL já encontrou, cadastrados, no banco de dados, 
 //outro usuário com o mesmo login ou e-mail do usuário atual
 if($conexao->affected_rows == 1)
  {
  exit("<p> Caro usuário, o login ou e-mail que você está utilizando já está cadastrado em nosso sistema. Aplicação encerrada. Tente novamente! </p>");
  }

 //está tudo ok com o cadastro do usuário. Gravamos os dados no banco de dados
 $sql = "INSERT $nomeDaTabela VALUES(
            null, 
            '$nome',
            '$email',
            '$loginCripto',
            '$senhaCripto')";

 $conexao->query($sql);

 session_start(); //abrindo a sessão
 $_SESSION["conectado"] = true; //criamos a variável de sessão aqui

 //redirecionamos o usuário após efetuar o cadastro/login para a página de login

 header("location: index.php");