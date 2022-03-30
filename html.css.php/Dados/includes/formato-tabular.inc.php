<?php
//vamos fazer o PHP enviar uma consulta SELECT ao banco de dados, para o MySQL devolver todos os regristo de cada aluno

$sql = "SELECT * FROM $nomeDaTabela"; //porém da para colocar dentro do query dentro dos () sem $sql
$resultado = $conexao->query($sql);


//criar o cabeçalho da tabela na página web
echo "<table>
            <tr>
                <th> Time </th>
                <th> Total jogos </th>   
                <th> Quantos jogos Blue side </th>
                <th> Pegou quantas 1* torres Blue side </th>
                <th> Quantos jogos red side </th>
                <th> Pegou quantas 1* torres Red side </th>
                </tr>";

//para devolver os dados dos registros do PHPmyadmin para a página web
while ($registro = $resultado->fetch_array()) 
{
    //evitando que os dados do MySQL para nosso código em PHP seja quebrado por um cracker da vida, conhecido como XSS.
    $time               =  $registro[0];
    $jogos_total        =  $registro[1];
    $jogos_blueside     =  $registro[2];
    $pegou_blueside     =  $registro[3];
    $jogos_redside      =  $registro[4];
    $pegou_redside      =  $registro[5];

    $time           = htmlentities($time, ENT_QUOTES, "UTF-8");
    $jogos_total    = htmlentities($jogos_total,  ENT_QUOTES, "UTF-8");
    $jogos_blueside = htmlentities($jogos_blueside,  ENT_QUOTES, "UTF-8");
    $pegou_blueside = htmlentities($pegou_blueside,  ENT_QUOTES, "UTF-8");
    $jogos_redside  = htmlentities($jogos_redside,  ENT_QUOTES, "UTF-8");
    $pegou_redside  = htmlentities($pegou_redside,  ENT_QUOTES, "UTF-8");

    echo "<tr>
                <td> $registro[0] </td> 
                <td> $registro[1] </td>
                <td> $registro[2] </td>
                <td> $registro[3] </td>
                <td> $registro[4] </td>
                <td> $registro[5] </td>
                </td>";
}

echo "</table>";
?>