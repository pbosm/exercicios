<?php

 //inserimos o comando para recebimento de dados no formulario e envio destes dados na base de dados
 $id        = $_POST['id'];
 $preco     = $_POST['preco'];
 $estoque   = $_POST['estoque'];
 $descricao = $_POST['descricao'];
 $classific  = $_POST['classificacao'];

 //antes de enviar os dados do formulario para o banco de dados, devemos utilizar os comandos que irão 
 //varrer as variáveis e detectar se há tentativa de invasão do banco de dados por meio do ataque injeção de SQL
 $id        = $conexao->escape_string($id);
 $preco     = $conexao->escape_string($preco);
 $estoque   = $conexao->escape_string($estoque);
 $descricao = $conexao->escape_string($descricao);
 $classific = $conexao->escape_string($classific);

 //criando a consultado em SQL que diz para o PHP enviar os dados para o cadastro nos servidor
 $sql = "INSERT $nomeDaTabela VALUES 
  ('$id', 
    $preco,
    $estoque,
    '$classific',
    '$descricao')";


 $conexao->query($sql);

