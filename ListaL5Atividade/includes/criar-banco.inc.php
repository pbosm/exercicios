<?php

 //etapa opcional. Se o banco ainda não foi criado no servidor, usamos o comando abaixo.
 $sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";

 $conexao->query($sql) OR exit($conexao->error);
