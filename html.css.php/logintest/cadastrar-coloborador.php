<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro coloborador</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro do coloborador</h3>
                    <div class="box">
                        <form action="cadastrar-coloborador_script.php" method="POST">

                            <div class="field">
                                <div class="control">
                                    <input type="text" name="empresa" class="input is-large" placeholder="Nome do coloborador"  required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="text" name="usuario" class="input is-large" placeholder="Nome do usuario" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="number" name="cnpj" class="input is-large" placeholder="cnpj" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="email" name="email" class="input is-large" placeholder="Seu e-mail" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="password" name="senha" class="input is-large" placeholder="Sua senha" required>
                                </div>
                            </div>

                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>   <br>

                            <a href="index.php" class="button is-block is-link is-large is-fullwidth">Voltar para o início</a>                                                         
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