<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

        <link href=" <?php echo URL_BASE . "assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" ?>" rel="stylesheet">
        <link href=" <?php echo URL_BASE . "assets/_css/estilo-form.css" ?>" rel="stylesheet">
        <link href=" <?php echo URL_BASE . "assets/img/logo.png" ?>" rel="stylesheet">
   
        <link href=" <?php echo URL_BASE . "assets/_css/sb-admin.css" ?>" rel="stylesheet">
    </head>

    <body class="text-center">



     
        <div id="logo" class="container">
          
         </div>
      
        
        
        <div class="container">
            <div class="form-signin">
                <h1 class="h4 mb-3 font-weight-normal">Login</h1>

                <?php
                if (isset($_SESSION['msg_erro'])) {
                    include 'alerta_erro.php';
                }
                ?>

                <form method="POST" action="<?php echo URL_BASE . "login/verificarLogin" ?>">

                    <div class="grid-item mb-2">
                        <input class="form-control"type="user" name="login" placeholder="Usuário" required/>
                    </div>

                    <div class="grid-item mb-4">
                        <input class="form-control" type="password" name="senha" placeholder="Senha" required/>
                    </div>

                    <div class="grid-item">
                        <input type="hidden" name="acao" value="login"/>
                        <button class="btn btn-primary btn-lg mb-3"type="submit" class="button">Entrar</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>