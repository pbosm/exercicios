<?php

 //inserimos o comando para recebimento de dados no formulario e envio destes dados na base de dados
 $crm       = $_POST['crm-consulta'];
 $nome      = $_POST['nome-paciente'];
 $data      = $_POST['data-internação'];

 //antes de enviar os dados do formulario para o banco de dados, devemos utilizar os comandos que irão 
 //varrer as variáveis e detectar se há tentativa de invasão do banco de dados por meio do ataque injeção de SQL
 $crm      = $conexao->escape_string($crm);
 $nome     = $conexao->escape_string($nome);
 $data     = $conexao->escape_string($data);

 //criando a consultado em SQL que diz para o PHP enviar os dados para o cadastro nos servidor
 $sql = "INSERT $nomeDaTabela2 VALUES 
  ( null,
   '$nome', 
   '$data',
   '$crm')";


 $conexao->query($sql);