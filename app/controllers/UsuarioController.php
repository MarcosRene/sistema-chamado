<?php

namespace app\controllers;

use app\core\Controller;
use app\models\UsuarioModel;
use app\models\PerfilModel;
use app\classes\Usuario;
use app\models\AreaModel;
use app\models\ChamadoModel;

session_start();
if(empty($_SESSION['home'])){
    header("location:" . URL_BASE);
}
    
class UsuarioController extends Controller {

    public function index() {
              
        if($_SESSION['perfil'] === 'usuario'){
            header("location:" . URL_BASE . "usuario/meusChamados");
        }else{ 
             header("location:" . URL_BASE . "chamado/listarChamados/Não atendido");
        }
 
    }
    

    public function novo() {

        $perfil = new PerfilModel();
        $dados["perfil"] = $perfil->lista();
        $dados["view"] = "admin/cadastro_usuario";
        $this->load("painel", $dados);
    }

    public function mostrarUsuarios() {

        $usuario = new UsuarioModel();
        $dados["usuarios"] = $usuario->listaUser();

        $dados["view"] = "admin/listar_usuario";
        $this->load("painel", $dados);
    }

    
    public function listarResponsaveis() {

        $usuario = new UsuarioModel();
        $dados["tecnico"] = $usuario->listaResponsaveis(2);
        $dados["admin"] = $usuario->listaResponsaveis(3);
        $dados["view"] = "usuario/listar_responsaveis";
        $this->load("painel", $dados);
    }

    public function adicionarResponsabilidade($id_usuario){
        
         $area = new AreaModel();
         $usuario = new UsuarioModel();
         $dados['areas'] = $area->lista();
         $dados['usuario'] = $usuario->getUsuario($id_usuario);
         $dados['view'] = 'usuario/adicionar_responsabilidade';
         $this->load("painel", $dados);
        
    }
    
    public function alterarResponsavel(){
        
        $id_usuario = isset($_POST["id_usuario"]) ? strip_tags(filter_input(INPUT_POST, "id_usuario")) : NULL;
        $descricao = isset($_POST["area"]) ? strip_tags(filter_input(INPUT_POST, "area")) : NULL;
        
        $usuarioModel = new UsuarioModel();
        $area = new AreaModel();
        
        
        $usuarioModel->alterarResponsavel($id_usuario, $area->getCodArea($descricao));

        header("location:" . URL_BASE . 'usuario/listarResponsaveis');
         
    }
    
    public function meusChamados(){
        
        $chamado = new ChamadoModel();
       
        $dados['naoAtendidos'] = $chamado->listaMeusChamados($_SESSION['dados']->id_usuario, 'Não atendido');
        $dados['emAtendimento'] = $chamado->listaMeusChamados($_SESSION['dados']->id_usuario, 'Em atendimento');
        $dados['aguardandoTerceiros'] = $chamado->listaMeusChamados($_SESSION['dados']->id_usuario, 'Aguardando terceiros');
     
        $dados['view'] =  "usuario/listar_chamado";
        $this->load('painel', $dados);
        
    }

    public function meusChamadosEncerrados(){
        
        $chamado = new ChamadoModel();
        $dados['encerrados'] = $chamado->listaMeusChamados($_SESSION['dados']->id_usuario, 'Encerrado');

        $dados['view'] =  "usuario/listar_encerrados";
        $this->load('painel', $dados);
        
    }
    
   
    public function confirmarEdicao() {


        $dados["view"] = "confirmaEdicao";
        $this->load("painel", $dados);
    }
    
    public function desativarUsuario($id_usuario) {

        $usuario = new UsuarioModel();
        $usuario->desativarUsuario($id_usuario);
        
        header("location:" . URL_BASE . "usuario/mostrarUsuarios");
        
    }

    public function abrirChamado() {

        $area = new AreaModel();
        $dados["areas"] = $area->lista();
        $dados["view"] = "usuario/cadastro_chamado";
        $this->load("painel", $dados);
    }
    

    public function salvar() {


        $model = new UsuarioModel();
        $p = new PerfilModel();

        $usuario = new Usuario();

        $id_usuario = isset($_POST["id_usuario"]) ? strip_tags(filter_input(INPUT_POST, "id_usuario")) : NULL;
        $perfil = isset($_POST["perfil"]) ? strip_tags(filter_input(INPUT_POST, "perfil")) : NULL;
        $nome = isset($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST, "nome")) : NULL;
        $sobrenome = isset($_POST["sobrenome"]) ? strip_tags(filter_input(INPUT_POST, "sobrenome")) : NULL;
        $email = isset($_POST["email"]) ? strip_tags(filter_input(INPUT_POST, "email")) : NULL;
        $login = isset($_POST["login"]) ? strip_tags(filter_input(INPUT_POST, "login")) : NULL;
        $senha = isset($_POST["senha"]) ? strip_tags(filter_input(INPUT_POST, "senha")) : NULL;
        $senha = crypt($senha, 'wfweferfdfsd3554#@@!!@vyguygufsdfsdfsdf');

        $id_perfil = $p->getCodPerfil($perfil);
        $usuario->setId_usuario($id_usuario);
        $usuario->setNome($nome);
        $usuario->setSobrenome($sobrenome);
        $usuario->setEmail($email);
        $usuario->setLogin($login);
        $usuario->setSenha($senha);
        $usuario->setAtivo("Ativo");
        $usuario->setId_perfil($id_perfil);


        if ($model->verificarEmail($email)) {
            $_SESSION['msg_erro'] = "Esse E-Mail já está em uso!";
            header("location:" . URL_BASE . "usuario/novo");
        } else if ($model->verificarLoginDisponivel($login)) {
            $_SESSION['msg_erro'] = "Esse login já está em uso!";
            header("location:" . URL_BASE . "usuario/novo");
        } else {

            if ($id_usuario) {
                $model->editar($usuario);
            } else {
                $model->inserir($usuario);
                $_SESSION['msg_erro'] = "Salvo com sucesso!";
            }

           header("location:" . URL_BASE . "usuario/mostrarUsuarios");
        }
    }

    public function edite($id_usuario) {

        $usuario = new UsuarioModel();
        $dados["usuario"] = $usuario->getUsuario($id_usuario);
        $dados["view"] = "admin/editar_usuario";
        $this->load("painel", $dados);
    }

    public function desativar($id_usuario) {
     
        $usuario = new UsuarioModel();
        
        $dados["usuario"] = $usuario->getUsuario($id_usuario);
        $dados["view"] = "admin/desativar_usuario";
        $this->load("painel", $dados);
    
        
    }
    
    
    public function gerarRelatorio(){
       
        $dados["view"] = "home_relatorio";
        $this->load("painel", $dados);

    }
    

}
