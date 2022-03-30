<?php

 //criação de tabela pelo php no banco de dados
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2(
   id INT PRIMARY KEY AUTO_INCREMENT,
   nome_paciente VARCHAR(500),
   data_internacao DATE,
   crm_medico VARCHAR(20),
   FOREIGN KEY(crm_medico) REFERENCES $nomeDaTabela1(crm)
   ) ENGINE=innoDB";

 $conexao->query($sql);