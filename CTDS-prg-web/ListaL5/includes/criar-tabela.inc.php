<?php

 //criação de tabela pelo php no banco de dados
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
   matricula VARCHAR(20) PRIMARY KEY,
   aluno VARCHAR(300),
   media DECIMAL(3,1))";

 $conexao->query($sql);
