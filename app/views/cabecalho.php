<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Gerenciamento</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-fw fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto ml-md-12">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span><?php echo ' ' . $_SESSION['usuario'] ?></span>
                <span  class="fas fa-user-circle ml-3" ></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo   URL_BASE . 'login/sair'?>">Sair</a>
            </div>
        </li>
    </ul>

</nav>