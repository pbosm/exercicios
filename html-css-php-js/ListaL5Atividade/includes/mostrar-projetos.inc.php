<?php
//vamos fazer o PHP enviar uma consulta SELECT ao banco de dados, para o MySQL devolver todos os regristo de cada aluno

$sql = "SELECT * FROM $nomeDaTabela WHERE data_projeto >='2020-01-01'"; //porém da para colocar dentro do query dentro dos () sem $sql
$resultado = $conexao->query($sql);

$numeroDeRegistros = $conexao->affected_rows;

if($numeroDeRegistros == 0)
 {
    echo "<p> Caro usuário, não há nenhum projeto posterior a 01/01/2020 . </p>";
    exit;
 } 


//criar o cabeçalho da tabela na página web
echo "<table>
        <caption> Projetos com data de início posterior a 01/01/2020 </caption>
            <tr>
                <th> ID </th>
                <th> Orçamento </th> 
                <th> Data </th>                
                </tr>";

//para devolver os dados dos registros do PHPmyadmin para a página web
while ($registro = $resultado->fetch_array()) 
{
    //evitando que os dados do MySQL para nosso código em PHP seja quebrado por um cracker da vida, conhecido como XSS.
    $data_projeto =  $registro[2];

    $data_projeto = htmlentities($data_projeto, ENT_QUOTES, "UTF-8");

    echo "<tr>
                <td> $registro[0] </td> 
                <td> $registro[1] </td> 
                <td> $registro[2] </td> 
                </td>";
                
}

echo "</table>";
?>