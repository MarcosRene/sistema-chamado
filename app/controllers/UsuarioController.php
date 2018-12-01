<?php

namespace app\controllers;

use app\core\Controller;
use app\classes\Usuario;
use app\models\FacadeModels;

session_start();
if(empty($_SESSION['home'])){
    header("location:" . URL_BASE);
}
    
class UsuarioController extends Controller {

    public function index() {
              
        if($_SESSION['perfil'] === 'usuario'){
            header("location:" . URL_BASE . "usuario/meusChamados/Não atendido");
        }else{ 
             header("location:" . URL_BASE . "chamado/listarChamados/Não atendido");
        }
    }
    
    public function novo() {

        $dados["perfil"] = $this->getFacade()->listarPerfis();
        $dados["view"] = "admin/cadastro_usuario";
        $this->load("painel", $dados);
    }

    public function mostrarUsuarios() {

        $dados["usuarios"] = $this->getFacade()->listaUsuariosAtivos();
        $dados["view"] = "admin/listar_usuario";
        $this->load("painel", $dados);
    }
    
    public function listarResponsaveis() {
        
        $dados["tecnico"] = $this->getFacade()->listaResponsaveis(2);
        $dados["admin"] = $this->getFacade()->listaResponsaveis(3);
        $dados["view"] = "usuario/listar_responsaveis";
        $this->load("painel", $dados);
    }

    public function adicionarResponsabilidade($id_usuario){
       
        $dados['areas'] = $this->getFacade()->listarAreas();
        $dados['usuario'] = $this->getFacade()->getUsuario($id_usuario);
        $dados['view'] = 'usuario/adicionar_responsabilidade';
        $this->load("painel", $dados);
     
    }
    
    public function alterarResponsavel(){
        
        $id_usuario = isset($_POST["id_usuario"]) ? strip_tags(filter_input(INPUT_POST, "id_usuario")) : NULL;
        $descricao = isset($_POST["area"]) ? strip_tags(filter_input(INPUT_POST, "area")) : NULL;
 
        $this->getFacade()->alterarResponsavel($id_usuario, $this->getFacade()->codigoArea($descricao));

        if($id_usuario == $_SESSION['dados']->id_usuario ){
            
            $_SESSION['dados']->descricaoArea = $descricao; 
        }
        
        header("location:" . URL_BASE . 'usuario/listarResponsaveis');
         
    }
    
    public function meusChamados($status){
               
        $dados['chamados'] = $this->getFacade()->meusChamados($status);
        $dados['view'] =  "usuario/listar_chamado";
        $this->load('painel', $dados);
        
    }

    public function confirmarEdicao() {
        
        $dados["view"] = "confirmaEdicao";
        $this->load("painel", $dados);
    }
    
    public function desativarUsuario($id_usuario) {
        
        $this->getFacade()->desativarUsuario($id_usuario);
        header("location:" . URL_BASE . "usuario/mostrarUsuarios");
        
    }
    
    public function abrirChamado() {

        $dados["areas"] = $this->getFacade()->listarAreas();
        $dados["view"] = "usuario/cadastro_chamado";
        $this->load("painel", $dados);
   
    }
    
    public function salvar() {
        
        $usuario = new Usuario();

        $id_usuario = isset($_POST["id_usuario"]) ? strip_tags(filter_input(INPUT_POST, "id_usuario")) : NULL;
        $perfil = isset($_POST["perfil"]) ? strip_tags(filter_input(INPUT_POST, "perfil")) : NULL;
        $nome = isset($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST, "nome")) : NULL;
        $sobrenome = isset($_POST["sobrenome"]) ? strip_tags(filter_input(INPUT_POST, "sobrenome")) : NULL;
        $email = isset($_POST["email"]) ? strip_tags(filter_input(INPUT_POST, "email")) : NULL;
        $login = isset($_POST["login"]) ? strip_tags(filter_input(INPUT_POST, "login")) : NULL;
        $senha = isset($_POST["senha"]) ? strip_tags(filter_input(INPUT_POST, "senha")) : NULL;
        $senha = crypt($senha, 'wfweferfdfsd3554#@@!!@vyguygufsdfsdfsdf');

        $id_perfil = $this->getFacade()->codigoPerfil($perfil);
        $usuario->setId_usuario($id_usuario);
        $usuario->setNome($nome);
        $usuario->setSobrenome($sobrenome);
        $usuario->setEmail($email);
        $usuario->setLogin($login);
        $usuario->setSenha($senha);
        $usuario->setAtivo("Ativo");
        $usuario->setId_perfil($id_perfil);

        if ($this->getFacade()->verificarEmail($email)) {
            $_SESSION['msg_erro'] = "Esse E-Mail já está em uso!";
            header("location:" . URL_BASE . "usuario/novo");
        } else if ($this->getFacade()->verificarLogin($login)) {
            $_SESSION['msg_erro'] = "Esse login já está em uso!";
            header("location:" . URL_BASE . "usuario/novo");
        } else {

            if ($id_usuario) {
                $this->getFacade()>editarUsuario($usuario);
            } else {
                $this->getFacade()->novoUsuario($usuario);
                $_SESSION['msg_erro'] = "Salvo com sucesso!";
            }

           header("location:" . URL_BASE . "usuario/mostrarUsuarios");
        }
    }

    public function edite($id_usuario) {

        $dados["usuario"] = $this->getFacade()->getUsuario($id_usuario);
        $dados["view"] = "admin/editar_usuario";
        $this->load("painel", $dados);
    }

    public function desativar($id_usuario) {
    
        $dados["usuario"] = $this->getFacade()->getUsuario($id_usuario);
        $dados["view"] = "admin/desativar_usuario";
        $this->load("painel", $dados);
    }
 
    
}
