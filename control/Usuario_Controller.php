<?php

include_once 'model/DAO/UsuarioDAO.php';

class Usuario_controller {

    function cadastrarUsuario() {
       
        $nome = filter_input(INPUT_POST, 'nome');
        $sobrenome = filter_input(INPUT_POST, 'sobrenome');
        $email = filter_input(INPUT_POST, 'email');
        $login = filter_input(INPUT_POST, 'login');
        $tipousuario = filter_input(INPUT_POST, 'tipousuario');
        $senha = crypt($senha);

        if (verificarEmailUsuario($email)) {

            $_SESSION['msg_erro'] = "Esse E-Mail já está em uso!";
            //header("Location:../views/moderador/novo-moderador.php");
        }else if(verificarLoginUsuario){
            
            
           
        } else {

            if (cadastrar_admin($nome, $email, $login, $senha)) {
                $_SESSION['msg_success'] = "Administrador Cadastrado com sucesso";
                header("Location:../views/moderador/ver-moderadores.php");
            } else {
                $_SESSION['msg_erro'] = "Erro ao tentar cadastrar o Administrador";
                header("Location:../views/moderador/novo-moderador.php");
            }
        }
    }

}
