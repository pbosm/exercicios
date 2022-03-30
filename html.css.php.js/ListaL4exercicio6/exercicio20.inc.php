<?php
 //área de declaração dos módulos
 function validaridade($idade)
 {
      $valortestado = filter_var($idade, FILTER_VALIDATE_INT);

      if($valortestado === false or $valortestado < 0)
      {
           exit("<p> ATENÇÃO: o valor da idade deve ser informada. Aplicação encerrada! </p>");
      }
 }

 //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

 function testaaptovotar($idade)
 {

      if($idade >=16)
      {
           echo "<p> O votante tem <span> $idade anos </span> e está apto a votar. </p>";
      }
      else
      {
          echo "<p> O votante tem <span> $idade anos </span> e não está apto a votar. </p>";
      }
 }