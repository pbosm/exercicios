<?php

 //criação de tabela pelo php no banco de dados
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
   id INT PRIMARY KEY,
   orcamento DECIMAL(7,2),
   data_projeto DATE,
   hora INT) ENGINE=innoDB";

 $conexao->query($sql);
