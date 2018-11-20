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
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet" type="text/css"/>


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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <script>
          $(document).ready(function() {
              $('#minhaTabela').DataTable({

                     "ordering": false,
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
