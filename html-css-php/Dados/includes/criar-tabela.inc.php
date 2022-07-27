<?php

 //criação de tabela pelo php no banco de dados
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
   timee VARCHAR(20) PRIMARY KEY,
   jogos_total INT,
   jogos_blueside INT,
   pegou_blueside INT,
   jogos_redside  INT,
   pegou_redside INT) ENGINE=innoDB";

 $conexao->query($sql);
