<?php

 //inserimos o comando para recebimento de dados no formulario e envio destes dados na base de dados
 $id        = $_POST['id'];
 $orcamento = $_POST['orcamento'];
 $data_projeto = $_POST['data_projeto'];
 $hora         = $_POST['hora'];

 //antes de enviar os dados do formulario para o banco de dados, devemos utilizar os comandos que irão 
 //varrer as variáveis e detectar se há tentativa de invasão do banco de dados por meio do ataque injeção de SQL
 $id        = $conexao->escape_string($id);
 $orcamento = $conexao->escape_string($orcamento);
 $data_projeto   = $conexao->escape_string($data_projeto);
 $hora           = $conexao->escape_string($hora);

 //criando a consultado em SQL que diz para o PHP enviar os dados para o cadastro nos servidor
 $sql = "INSERT $nomeDaTabela VALUES 
  ('$id', 
    '$orcamento',
   '$data_projeto',
    '$hora')";


 $conexao->query($sql);

