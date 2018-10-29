<?php

require 'app/core/Core.php';
require 'vendor/autoload.php';
require_once 'conexao/Conexao.php';
use app\models\PerfilDAO;

$core = perfilDAO::getInstance();
$perfil = $core->buscarPorCOD(2);


var_dump($perfil);
//$core->run();
