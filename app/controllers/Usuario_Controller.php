<?php

namespace app\controllers;
use app\core\Controller;
use app\models\UsuarioDAO;


class Usuario_controller extends Controller{

    
    public function index(){
    
        
        
    }
    
   public static function cadastrarUsuario() {
       
        $usuario = new Usuario();
       
        $usuario->setNome(filter_input(INPUT_POST, 'nome'));
        $usuario->setSobrenome(filter_input(INPUT_POST, 'sobrenome'));
        $usuario->setEmail(filter_input(INPUT_POST, 'email'));
        $usuario->setLogin(filter_input(INPUT_POST, 'login'));
        $senha = filter_input(INPUT_POST, 'senha');
        $senha = crypt($senha, 'wfweferfdfsd3554#@@!!@vyguygufsdfsdfsdf');
        $usuario->setSenha($senha);
         

//  if(filter_input(INPUT_POST, 'lista')->)
        $usuario->setId_perfil(3);
     
      //  var_dump($usuario);
        UsuarioDAO::Inserir($usuario);
        
     //   if (verificarEmailUsuario($email)) {

        //    $_SESSION['msg_erro'] = "Esse E-Mail já está em uso!";
        //    //header("Location:../views/moderador/novo-moderador.php");
       // }else if(verificarLoginUsuario){
            
            
           
       // } else {

        //    if (cadastrar_admin($nome, $email, $login, $senha)) {
         //       $_SESSION['msg_success'] = "Administrador Cadastrado com sucesso";
        //        header("Location:../views/moderador/ver-moderadores.php");
        //    } else {
           //     $_SESSION['msg_erro'] = "Erro ao tentar cadastrar o Administrador";
          //      header("Location:../views/moderador/novo-moderador.php");
        //    }
       // }
    }

}
