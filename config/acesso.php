<?php

function verificarAcesso($permissoes) {

    if (!isset($_SESSION['logado'])) {
        header("location:" . URL_BASE . "login");
    }
    if (!in_array($_SESSION['logado']['nv_acesso'], $permissoes)) {
        header("location:" . URL_BASE . "login");
    }
}
