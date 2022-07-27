<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro usuário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

<?php
        session_start();
        include('conexao.php');

        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
        
        $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

       $sql = "insert usuario (usuario, email, senha)values('{$usuario}' , '{$email}' , md5('{$senha}'))";
       //$sql = "insert cadastro (usuario, email, senha)values('{$usuario}',('{$email}'),md5('{$senha}'))";
       //$query = "select cadastro_id, cadastro from cadastro where cadastro = '{$usuario}' and '{$email}' and senha = md5 ('{$senha}')";
       $query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' , '{$email}' , senha = md5 ('{$senha}')";


        if (mysqli_query($conexao, $sql))
        {
            echo "<p> $usuario cadastrado com sucesso! </p>";
        } else 
            echo "<p> $usuario NÃO cadastrado! </p>";

            

?>

        <a href="cadastrar-usuario.php" class="button is-block is-link is-large is-fullwidth"> Voltar para cadastro do usuário</a> <br>
        <a href="index.php" class="button is-block is-link is-large is-fullwidth"> Voltar para página inicial </a>

</body>

</html>