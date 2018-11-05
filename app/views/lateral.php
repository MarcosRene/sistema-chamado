<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL_BASE . "usuario/home" ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
   
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Chamado</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#">Listar</a>
            <a class="dropdown-item" href="#">Abrir</a>
        </div>
    </li>
   
    <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_BASE . "cliente/salvar" ?>">
            <i class="fas fa-fw fa-clock"></i>
            <span>Atender</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuário</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/mostrarusuarios" ?>">Listar</a>
            <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/novo" ?>">Cadastrar</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Relatórios</span></a>
    </li>
</ul>