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
        <link href=" <?php echo URL_BASE . "assets/_css/sb-admin.css" ?>" rel="stylesheet" type="text/css">
        <link href=" <?php echo URL_BASE . "assets/img/logoJanela.png"?>" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

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
        <script src=" <?php echo URL_BASE . "assets/_js/sb-admin.min.js" ?>"></script>
        <script src=" <?php echo URL_BASE . "assets/Sass/node_modeules/popper/dist/popper.min.js" ?>"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

        <script>
          $(document).ready(function() {
              $('#minhaTabela').DataTable({

                  "lengthMenu": [ 5 ],
                  "bProcessing": true,
                  "deferRender": true,
                  "language": {

                      "lengthMenu": " ",
                      "zeroRecords": "Nada foi encontrado",
                      "info": " ",
                      "infoEmpty": " ",
                      "infoFiltered": " ",
                      "search": "Buscar: ",

                      "paginate": {
                          "previous": "Anterior",
                          "next": "Próximo"
                      },

                  },
              });

          } );
        </script>
    </body>
</html
