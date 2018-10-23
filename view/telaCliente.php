<?php

include_once 'acesso.php';

$permissoes = ['cliente'];
verificarAcesso($permissoes);

?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" real="stylesheet">
        <link href="assets/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css" real="stylesheet">
        <title>Home</title>
        <link href="assets/_css/sb-admin.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="index.html">Gerenciamento</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fa fa-bars"></i>
            </button>

            <ul class="navbar-nav ml-auto ml-md-12">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
                    </div>
                </li>
            </ul>

        </nav>


        <div id="wrapper">

            <ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fa fa-fw fa-clock-o"></i>
                        <span>Abrir chamado</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-bar-chart"></i>
                        <span>Buscar</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-user"></i>
                        <span>Chamados Encerrados</span></a>
                </li>
            </ul>

            <div id="content-wrapper">



                <script src="assets/Sass/node_modules/jquery/dist/jquery.min.js"></script>
                <script src="assets/Sass/node_modules/popper.js/dist/umd/popper.min.js"></script>
                <script src="assets/Sass/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  

                </body>

                </html>
