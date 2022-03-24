<?php
//vamos fazer o PHP enviar uma consulta SELECT ao banco de dados, para o MySQL devolver todos os regristo de cada aluno

$sql = "SELECT * FROM $nomeDaTabela WHERE classificacao = 'Perecível' ORDER BY estoque DESC"; //porém da para colocar dentro do query dentro dos () sem $sql
$resultado = $conexao->query($sql);


//criar o cabeçalho da tabela na página web
echo "<table>
        <caption> Relação de produtos perecíveis cadastrados, em ordem decrescente de estoque </caption>
            <tr>
                <th> ID </th>
                <th> Preço unitário </th>   
                <th> Quantidade em estoque </th>
                <th> Classificação do produto </th>
                <th> Descrição </th>
                </tr>";

//para devolver os dados dos registros do PHPmyadmin para a página web
while ($registro = $resultado->fetch_array()) 
{
    //evitando que os dados do MySQL para nosso código em PHP seja quebrado por um cracker da vida, conhecido como XSS.
    $id         =  $registro[0];
    $preco      =  $registro[1];
    $estoque    =  $registro[2];
    $classific  =  $registro[3];
    $descricao  =  $registro["descricao"];

    $id         = htmlentities($id, ENT_QUOTES, "UTF-8");
    $preco      = htmlentities($preco,  ENT_QUOTES, "UTF-8");
    $estoque    = htmlentities($estoque,  ENT_QUOTES, "UTF-8");
    $classific  = htmlentities($classific,  ENT_QUOTES, "UTF-8");
    $descricao  = htmlentities($descricao,  ENT_QUOTES, "UTF-8");

    echo "<tr>
                <td> $registro[0] </td> 
                <td> $registro[1] </td>
                <td> $registro[2] </td>
                <td> $registro[3] </td>
                <td> $registro[4] </td>
                </td>";
}

echo "</table>";
?>