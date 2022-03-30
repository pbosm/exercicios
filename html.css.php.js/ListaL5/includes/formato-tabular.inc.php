<?php
//vamos fazer o PHP enviar uma consulta SELECT ao banco de dados, para o MySQL devolver todos os regristo de cada aluno

$sql = "SELECT * FROM $nomeDaTabela"; //porém da para colocar dentro do query dentro dos () sem $sql
$resultado = $conexao->query($sql);


//criar o cabeçalho da tabela na página web
echo "<table>
        <caption> Relação de alunos cadastrados </caption>
            <tr>
                <th> Matrícula </th>
                <th> Aluno </th>   
                <th> Média final de PRW </th>
                </tr>";

//para devolver os dados dos registros do PHPmyadmin para a página web
while ($registro = $resultado->fetch_array()) 
{
    //evitando que os dados do MySQL para nosso código em PHP seja quebrado por um cracker da vida, conhecido como XSS.
    $matric =  $registro[0];
    $aluno  =  $registro[1];
    $media  =  $registro[2];

    $matric = htmlentities($matric, ENT_QUOTES, "UTF-8");
    $aluno  = htmlentities($aluno,  ENT_QUOTES, "UTF-8");
    $media  = htmlentities($media,  ENT_QUOTES, "UTF-8");

    echo "<tr>
                <td> $registro[0] </td> 
                <td> $registro[1] </td>
                <td> $registro[2] </td>
                </td>";
}

echo "</table>";
?>