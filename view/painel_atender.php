<!DOCTYPE html>
<html lang="pt-br">

  <head>
        <meta charset="utf-8">
        <title>SB Admin - Tables</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet">
        <link href="../assets/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../assets/_css/sb-admin.css" rel="stylesheet">
        
  </head>

  <body id="page-top">

    <?php require_once('includes/cabecalho_admin.php')?>
    
      
    <div id="wrapper">
      <ul class="sidebar navbar-nav">
         <li class="nav-item">
            <a class="nav-link" href="adm.html">
            <i class="fa fa-fw fa-dashboard"></i>
                <span>Dashboard</span></a>
        </li>  
        <li class="nav-item">
            <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-clock-o"></i>
                <span>Atender</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span>Relatório</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-user"></i>
            <span>Usuários</span></a>
        </li>
      </ul>



        
        <?php
        
        require_once('includes/tabela_chamados_atender.php');
        
        require_once('includes/rodape_admin.php');
        
        ?>
    
      </div>
      
    
    <script src="../assets/Sass/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assets/Sass/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/Sass/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      
    
    </body>

</html>
      