<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integração de banco de dados no PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Utilizando de variáveis de sessão em PHP </h1>

 <form action="pagina1.php" method="post">
    <fieldset>
        <legend> Dados das variáveis de sessão </legend>

        <label class="alinha"> Nome do aluno: </label>
        <input type="text" name="aluno" autofocus placeholder="Nome do aluno..."> <br>

        <label class="alinha"> Nota do aluno em PRW: </label>
        <input type="number" name="nota" min="0" max="10" step="0.1"> <br>

        <button type="submit" name="criar-sessao"> Criar variáveis de sessão </button>
        
    </fieldset>

  <?php
  //echo"<p>O PHP já executou os comandos desta página. Esta é a resposta retornada pelo PHP após a execução dos comandos deste arquivo no servidor. </p>";
  //quando misturamos html e PHP em um unico arquivo, devemos testar se o botão submit foi utilizado pelo cliente da aplicação
  //para não dar erro 

  if(isset($_POST['criar-sessao']))
  {
    $aluno = $_POST['aluno'];
    $nota  = $_POST['nota'];

    echo"<p> Valores das variáveis antes da criptografia: <br>
          Aluno = <span> $aluno </span> <br>
          Nota  = <span> $nota </span> </p>";

   //NEW - criptografar - tornando os dados mais seguros via PHP
    $alunoCriptografado = hash("sha512", $aluno);
    $notaCriptografado = hash("sha512", $nota);

    echo"<p> Valores das variáveis criptogradas: <br>
          Aluno = <span> $alunoCriptografado </span> <br>
          Nota  = <span> $notaCriptografado </span> </p>";

    //antes de prosseguir, vamos abrir ou iniciar a sessão
    session_start();
    
    //criando as variáveeis de sessão
    $_SESSION['aluno'] = $aluno;
    $_SESSION['nota']  = $nota;
    $_SESSION['data']  = date("d/m/Y");

    //ir para a página 2, recuperar as variáveis dee sessão e mostrá-las ao usuário
    echo "<a title='Trabalhando com variáveis de sessão' href='pagina2.php'> Mostrar dados da sessão na próxima página </a>";

  }
  
   
  ?>
      
 </form> 
</body> 
</html>