<?php
 //área de declaração da função
  function calcularmedia($nota1, $nota2)
  {
    $mediadoaluno = ($nota1 + $nota2) / 2;
    return $mediadoaluno;
  }
  function verificaraprovacao($media)
  {
    if($media >=6 )
    {
      echo "<p> A média é = <span> $media </span>. Aluno aprovado! </p>";
    }
    else
    {
      echo "<p> A média é = <span> $media </span>. Aluno não foi aprovado! </p>";
    }
  }
?>
