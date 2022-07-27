<?php

 //inserimos o comando para recebimento de dados no formulario e envio destes dados na base de dados
 $crm       = $_POST['crm'];
 $nome     = $_POST['nome-medico'];

 //antes de enviar os dados do formulario para o banco de dados, devemos utilizar os comandos que irão 
 //varrer as variáveis e detectar se há tentativa de invasão do banco de dados por meio do ataque injeção de SQL
 $crm      = $conexao->escape_string($crm);
 $nome     = $conexao->escape_string($nome);

 //criando a consultado em SQL que diz para o PHP enviar os dados para o cadastro nos servidor
 $sql = "INSERT $nomeDaTabela1 VALUES 
  ('$crm', 
   '$nome')";


 $conexao->query($sql);

