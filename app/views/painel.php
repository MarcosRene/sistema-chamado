<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        <title>Gerenciamento</title>     
        <link href=" <?php echo URL_BASE . "assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" ?>" rel="stylesheet">
        <link href=" <?php echo URL_BASE . "assets/vendor/fontawesome-free/css/all.min.css" ?>" rel="stylesheet" type="text/css">
        <link href=" <?php echo URL_BASE . "assets/_css/sb-admin.css" ?>" rel="stylesheet">  

    
    </head>

    <body>
        <?php include "cabecalho.php" ?> 
        <div id="wrapper">
            <?php include "lateral.php" ?>  
            <div id="content-wrapper">
                <div class="container-fluid">
                    <?php $this->load($view, $viewData)?>
                </div>
                    <?php include "rodape.php"?>
            </div>
        </div>
        
        <script src=" <?php echo URL_BASE . "assets/Sass/node_modules/jquery/dist/jquery.min.js"?>"></script>
        <script src=" <?php echo URL_BASE . "assets/Sass/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"?>"></script>
        <script src=" <?php echo URL_BASE . "assets/vendor/jquery-easing/jquery.easing.min.js"?>"></script>
        <script src=" <?php echo URL_BASE . "assets/_js/sb-admin.min.js" ?>"</script>
        <script src=" <?php echo URL_BASE . "assets/Sass/node_modeules/popper/dist/popper.min.js" ?>"</script>
         
    </body>
</html>
