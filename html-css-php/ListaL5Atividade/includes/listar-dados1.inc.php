<?php
//vamos fazer o PHP enviar uma consulta SELECT ao banco de dados, para o MySQL devolver todos os regristo de cada aluno

$sql = "SELECT * FROM $nomeDaTabela"; //porém da para colocar dentro do query dentro dos () sem $sql
$resultado = $conexao->query($sql);


//criar o cabeçalho da tabela na página web
echo "<table>
        <caption> Dados de todos os ID e Orçamentos </caption>
            <tr>
                <th> ID </th>
                <th> Orçamento </th>   
                </tr>";

//para devolver os dados dos registros do PHPmyadmin para a página web
while ($registro = $resultado->fetch_array()) 
{
    //evitando que os dados do MySQL para nosso código em PHP seja quebrado por um cracker da vida, conhecido como XSS.
    $id         =  $registro[0];
    $orcamento  =  $registro[1];

    $id         = htmlentities($id, ENT_QUOTES, "UTF-8");
    $orcamento  = htmlentities($orcamento,  ENT_QUOTES, "UTF-8");

    echo "<tr>
                <td> $registro[0] </td> 
                <td> $registro[1] </td>
                </td>";
}

echo "</table>";
?>