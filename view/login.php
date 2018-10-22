
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>chamado</title>

        <link href="assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" real="stylesheet">
        <link href="assets/_css/estilo.css" rel="stylesheet">
        <link href="assets/_css/estilo-form.css" rel="stylesheet">

    </head>


    <body class="text-center">
        <div class="container">
            <div class="form-signin">
                <h1 class="h4 mb-3 font-weight-normal">Login</h1>

                <form action="login_controle.php" method="POST">
                    <div class="form-group">
                        <label class="sr-only" for="usuario">Usuário</label>
                        <input class="form-control" type="text" id="usuario" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="senha">Senha</label>
                        <input class="form-control" type="password" id="senha" placeholder="Senha">
                    </div>                
                    <div class="form-group">
                        <a href="principal.html"><button class="btn btn-primary" type="submit" >Entrar</button></a>
                    </div> 
                    <div class="form-group">
                        <div id="recuperar">
                            <a href="#">Recupere sua senha</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <script src="assets/Sass/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="assets/Sass/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/Sass/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>


</html>