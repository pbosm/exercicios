<?php
  $sql = "SELECT SUM(estoque * preco_unitario) FROM $nomeDaTabela WHERE classificacao = 'Não-Perecível'";
  $resultado = $conexao->query($sql);

  $registro  = $resultado->fetch_array();
  
  $faturamento = $registro[0];
  $faturamento = htmlentities($faturamento, ENT_QUOTES, "UTF-8");
  $faturamentoFormatado = number_format($faturamento, 2, ",", ".");

  echo "<p> O faturamento total decorrente da venda de todo o estoque de produtos não-perecíveis é igual a <span> R$$faturamentoFormatado </span> </p>";