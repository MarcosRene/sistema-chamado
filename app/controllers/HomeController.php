<?php

namespace app\controllers;
use app\core\Controller;
require 'config/acesso.php';

$permissoes = ['admin'];
verificarAcesso($permissoes);

class HomeController extends Controller {

    public function index() {
       
        $dados["view"] = "v_home";
        $this->load("template", $dados);
    }

}
