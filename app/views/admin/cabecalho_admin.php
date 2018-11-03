<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <span class="navbar-brand mr-1">Gerenciamento</span>
    <ul class="navbar-nav ml-auto ml-md-12">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-user-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo URL_BASE . "login/sair" ?>" data-toggle="modal" data-target="#logoutModal">Sair</a>
            </div>
        </li>
    </ul>

</nav>