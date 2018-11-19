<?php
 if(!isset($_SESSION['usuario'])){
      header("location:" . URL_BASE);
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        <title>Gerenciamento</title>     
        <link href=" <?php echo URL_BASE . "assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" ?>" rel="stylesheet">
        <link href=" <?php echo URL_BASE . "assets/vendor/fontawesome-free/css/all.min.css" ?>" rel="stylesheet" type="text/css">
        <link href=" <?php echo URL_BASE . "assets/_css/sb-admin.css" ?>" rel="stylesheet">
        <link href=" <?php echo URL_BASE . "assets/img/logoJanela.png"?>" rel="shortcut icon">
         <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    
    </head>

    <body>
        <?php include "cabecalho.php" ?>
        <div id="wrapper">
            <?php include $_SESSION['perfil']  ."/lateral.php"?>
            <div id="content-wrapper">
                <div class="container-fluid">
                    <?php $this->load($view, $viewData)?>
                </div>
                    <?php include "rodape.php" ?>
            </div>
        </div>
        
        <script src=" <?php echo URL_BASE . "assets/Sass/node_modules/jquery/dist/jquery.min.js"?>"></script>
        <script src=" <?php echo URL_BASE . "assets/Sass/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"?>"></script>
        <script src=" <?php echo URL_BASE . "assets/vendor/jquery-easing/jquery.easing.min.js"?>"></script>
        <script src=" <?php echo URL_BASE . "assets/_js/sb-admin.min.js" ?>"</script>
        <script src=" <?php echo URL_BASE . "assets/Sass/node_modeules/popper/dist/popper.min.js" ?>"</script>
         
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
          "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
                
            }
        });
  });
  </script>
    </body>
</html
