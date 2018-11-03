<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <title>Novo Usuário</title>
        <link href=" <?php echo URL_BASE . "assets/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css" ?>" rel="stylesheet">
        <link href=" <?php echo URL_BASE . "assets/css/Sass/node_modules/bootstrap/compiler/bootstrap.css" ?>" rel="stylesheet">
        <link href=" <?php echo URL_BASE . "assets/css/sb-admin.css" ?>" rel="stylesheet">  
        <link href=" <?php echo URL_BASE . "assets/css/formulario.css" ?>" rel="stylesheet">  
    </head>

    <body>
        <?php include "cabecalho_admin.php" ?> 
        <div id="wrapper">
            <?php include "lateralTecnico.php" ?>  
            <div id="content-wrapper">
                <?php $this->load($view, $viewData)?>
       
            </div>
        </div>
    </body>
</html>
