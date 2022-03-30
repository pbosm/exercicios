<?php

 //inserimos o comando para recebimento de dados no formulario e envio destes dados na base de dados
 $aluno     = $_POST['aluno'];
 $matricula = $_POST['matricula'];
 $media     = $_POST['media'];

 //antes de enviar os dados do formulario para o banco de dados, devemos utilizar os comandos que irão 
 //varrer as variáveis e detectar se há tentativa de invasão do banco de dados por meio do ataque injeção de SQL
 $aluno     = $conexao->escape_string($aluno);
 $matricula = $conexao->escape_string($matricula);
 $media     = $conexao->escape_string($media);

 //criando a consultado em SQL que diz para o PHP enviar os dados para o cadastro nos servidor
 $sql = "INSERT $nomeDaTabela VALUES 
 ('$matricula', 
  '$aluno',
   $media)";


 $conexao->query($sql);

