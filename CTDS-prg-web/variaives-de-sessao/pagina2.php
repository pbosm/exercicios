<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Sessões em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body>
 <h1> Lendo e apagando variáveis de sessão em PHP </h1>

 <form action="pagina2.php" method="post">
    <fieldset>
        <legend> Lendo e apagando variáveiss de sessão </legend>

        <button name="mostrar-dados-sessao"> Mostrar dados das variáveis de sessão </button>
        <button name="apagar-sessao"> Apagar variáveis de sessão </button>
        
    </fieldset>
 </form> 

  <?php
    //reabrimos a sessão
    session_start();

    //testando o primeiro botão
    if(isset($_POST['mostrar-dados-sessao']))
    {
        //testar se as variáveis de sessão ainda existeem no vetor $_session
        if(isset($_SESSION['aluno']) and isset($_SESSION['nota']) and isset($_SESSION['data']))
        {
            //dados da sessão existem
            $aluno = $_SESSION['aluno'];
            $nota = $_SESSION['nota'];
            $data = $_SESSION['data'];

            echo "<p> Dados recuperados das variáveis de sessão da página anterior: <br>
                    Aluno = <span> $aluno </span> <br>
                    Nota  = <span> $nota  </span> <br>
                    Data  = <span> $data  </span> <br> </p>";
        }
        else
        {
            echo "<p> Impossivel recuperar dados da sessão, pois alguns deles estão faltando. </p>";
        }   
    }

    //testar segundo botão
    if(isset($_POST['apagar-sessao']))
    {
        if(isset($_SESSION['aluno']) and isset($_SESSION['nota']) and isset($_SESSION['data']))
        {
            $_SESSION = array();
            session_destroy();
            echo "<p> Sessão apagada com sucesso! </p>";
        }
        else
        {
        echo "<p> Impossivel apagar dados da sessão, pois alguns deles estão faltando. </p>";
        }
    }
  
  ?>
      
</body> 
</html>