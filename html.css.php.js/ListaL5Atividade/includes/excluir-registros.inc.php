<?php

 $sql = "DELETE FROM $nomeDaTabela WHERE (orcamento < 1000.00 AND hora < 100)";

 $conexao->query($sql);

 $numeroDeRegistrosExcluidos = $conexao->affected_rows;

 if($numeroDeRegistrosExcluidos == 0)
 {
    echo "<p> Caro usuário, não foi possível excluir nenhum registro do banco de dados. </p>";
 } 
 else
 {
    echo "<p> Exclusão de registro efetuada com sucesso. </p>";
 }

?> 