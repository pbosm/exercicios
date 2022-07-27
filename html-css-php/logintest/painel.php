<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey"> Olá, <?php echo $_SESSION['usuario'];?></h3>
                    <h4 class="title has-text-grey"> Estamos em manutenção/processo de desenvolvimento </h4>  
                    <a href="logout.php" class="button is-block is-link is-large is-fullwidth">Sair</a>                                                         
                        </form>                                           
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>