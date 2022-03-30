<?php 
//receber o nome do médico a ser pesquisado
$nomeMedico = trim($conexao->escape_string($_POST['pesquisa-nome-medico']));

//agora, criamos uma consulta na tabela medicos para verificar qual o CRM está associado ao nome do médico
$sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome_medico = '$nomeMedico'";

$resultado = $conexao->query($sql);

//testar se o banco de dados encontrous o nome do médico associado ao CRM da busca
if($conexao->affected_rows <= 0)
{
    exit("<p> O nome do médico pesquisado <span> $nomeMedico </span> não foi encontrado no banco de dados. </p>");
}

//recuperando o CRM do médico pesquisado
$registro = $resultado->fetch_array();

$crmPesquisado = $registro[0];
$crmPesquisado = htmlentities($crmPesquisado, ENT_QUOTES, "UTF-8");

//pedimos ao banco de dados que retorne ao nosso codigo em PHP a contagem do número de pacientes atendidos pelo médico com CRM descoberto
$sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_medico = '$crmPesquisado'";

$resultado = $conexao->query($sql);

$registro = $resultado->fetch_array();

$numeroPacientes = $registro[0];
$numeroPacientes = htmlentities($numeroPacientes, ENT_QUOTES, "UTF-8");

echo "<p> O número de pacientes sob os cuidados do médico <span> $nomeMedico </span> é igual a <span> $numeroPacientes </span </p>";