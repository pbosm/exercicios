<?php

 //inserimos o comando para recebimento de dados no formulario e envio destes dados na base de dados
 $id        = $_POST['altera-id'];
 $novoPreco = $_POST['altera-preco'];

 //antes de enviar os dados do formulario para o banco de dados, devemos utilizar os comandos que irão 
 //varrer as variáveis e detectar se há tentativa de invasão do banco de dados por meio do ataque injeção de SQL
 $id        = $conexao->escape_string($id);
 $novoPreco = $conexao->escape_string($novoPreco);

 $sql = "UPDATE $nomeDaTabela SET preco_unitario = $novoPreco WHERE id = '$id'";

 $conexao->query($sql);

 //neste ponto, podemos usar código em PHP para testar se a consulta de alteração foi ou não bem sucedida
 $numeroDeRegistrosAfetados = $conexao->affected_rows;

 if($numeroDeRegistrosAfetados <= 0)
 {
    echo "<p> Caro usuário, não foi possível alterar o preço do produto pesquisado, porque o ID fornecidado não foi encontrado em nossa base de dados. </p>";
 } 
 else
 {
    echo "<p> Alteração de preço do produto com o ID igual a <span> $id </span> foi efetuada com sucesso! </p>";
 }

?> 