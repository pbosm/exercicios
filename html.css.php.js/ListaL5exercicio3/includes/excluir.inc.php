<?php
 $quantidade     = $_POST['exclui-produto'];
 $quantidade      = $conexao->escape_string($quantidade);

 $sql = "DELETE FROM $nomeDaTabela WHERE estoque < $quantidade";

 $conexao->query($sql);

 $numeroDeRegistrosExcluidos = $conexao->affected_rows;

 if($numeroDeRegistrosExcluidos == 0)
 {
    echo "<p> Caro usuário, não foi possível excluir nenhum registro do banco de dados. </p>";
 } 
 else
 {
    echo "<p> Exclusão de registro efetuada com sucesso. Mercadorias com estoque abaixo de <span> $quantidade </span> unidades e que foi excluida é igual a <span> $numeroDeRegistrosExcluidos </span> mercadorias. </p>";
 }

?> 