<?php

namespace app\controllers;

use app\core\Controller;
use app\models\UsuarioModel;

session_start();

class LoginController extends Controller {

    public function index() {
     

        $dados["view"] = "Login";
        $this->load("login", $dados);
    }

    public function sair() {
        session_destroy();
        $dados["view"] = "login";
        $this->load("login", $dados);
    }

    static function verificarLogin() {

        $login = filter_input(INPUT_POST, 'login');  
        $senha = filter_input(INPUT_POST, 'senha');

        $use = new UsuarioModel();

        if ($use->verificarlogin($login, $senha)){
            header("location:" . URL_BASE . "usuario/index");
        } else {
            $_SESSION['msg_erro'] = "Login ou Senha inválidos";
            header("location:" . URL_BASE);
        }
    }

}
