<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL_BASE . "usuario/home" ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Chamado</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/abrirChamado" ?>">Abrir</a>
            <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/meusChamados" ?>">Abertos</a>
            <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/meusChamadosEncerrados" ?>">Encerrados</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuário</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/novo" ?>">Cadastrar</a>
            <a class="dropdown-item" href="<?php echo URL_BASE . "usuario/mostrarusuarios" ?>">Listar</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Áreas</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo URL_BASE . "area/novo" ?>">Cadastrar</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_BASE . "usuario/gerarRelatorio" ?>">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Relatórios</span></a>
    </li>
</ul>