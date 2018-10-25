<?php

include_once 'model/DAO/UsuarioDAO.php';

class Login_Controller {

   static function verificarLogin() {
        
        $login = filter_input(INPUT_POST, 'login');
        $senha = filter_input(INPUT_POST, 'senha');

        
        if (UsuarioDAO::verificarLoginUsuario($login, $senha)) {

            require_once 'view/telaCliente.php';
            
        } else {
            $_SESSION['msg_erro'] = "Login ou Senha inválidos";
            require_once 'view/login.php';
        }
    }

    function verificarEmail($email) {

        if (verificarEmailAdmin($email) || verificarEmailAluno($email) || verificarEmailCoordenador($email) || verificarEmailProfessor($email) || verificarEmailResponsavel($email)) {
            return true;
        }
    }

}
