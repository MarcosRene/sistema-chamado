<?php

function verificarAcesso($permissoes) {

    if (!isset($_SESSION['usuario_logado']))
        require_once 'view/login.php';

    if (!in_array($_SESSION['usuario_logado']['nv_acesso'], $permissoes))
        require_once 'view/login.php';
    
}
