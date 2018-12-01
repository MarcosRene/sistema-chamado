<?php

namespace app\models;

use app\models\UsuarioModel;
use app\models\ChamadoModel;
use app\models\AreaModel;
use app\models\PerfilModel;

class FacadeModels {
 
   private $areaModel;
   private $usuarioModel;
   private  $perfilModel;
   private $chamadoModel;
   
   function __construct() {

       $this->areaModel = new AreaModel();
       $this->usuarioModel = new UsuarioModel;
       $this->perfilModel = new PerfilModel();
       $this->chamadoModel = new ChamadoModel();
   }

   public function listarPerfis(){
     
       return $this->perfilModel->lista();
   } 

   public function listarAreas(){
       
       return $this->areaModel->lista();
   }
    
   public function listarUsuarios(){
       
       return $this->usuarioModel->lista();
   }
  
   public function codigoArea($descricao){
       return $this->areaModel->getCodArea($descricao);
   }
   
   public function codigoPerfil($descricao){
       return $this->perfilModel->getCodPerfil($descricao);
   }
   
   public function novoChamado($chamado){
        
       if($chamado instanceof \app\classes\ChamadoEquipamento)
           $this->chamadoModel->inserirChamadoEquip ($chamado);
       else
           $this->chamadoModel->inserirChamado($chamado);
   }

   public function getChamado($id_chamado){
      
       return $this->chamadoModel->getChamado($id_chamado);
   }
  
   public function alterarPrioridade($id_chamado, $prioridade){
       
       $this->chamadoModel->alterarPrioridade($id_chamado, $prioridade);
       
   }
   
   public function novoUsuario($usuario){
      
      $this->usuarioModel->inserir($usuario);
   }
   
   public function editarUsuario($usuario){
       
      $this->usuarioModel->editar($usuario); 
   }
  
   public function listaChamados($status){

       return $this->chamadoModel->listaChamados($status);
       
   }
   
   public function atenderChamado($id_chamado, $parecer, $id_tecnico, $status){
       
       $this->chamadoModel->atenderChamado($id_chamado, $parecer, $id_tecnico, $status);
   }
   
   
   public function meusChamados($status){
       
       return $this->chamadoModel->listaMeusChamados($_SESSION['dados']->id_usuario, $status);
   }
   
   public function chamadosArea($area){
 
       return $this->chamadosArea($area);
   }
   
   public function verificarEmail($email){
       
       $this->usuarioModel->verificarEmail($email);
   }
  
   public function verificarLogin($login){
       
       $this->usuarioModel->verificarLoginDisponivel($login);
   }
   
   public function login($login, $senha){
       
       $this->usuarioModel->verificarlogin($login, $senha);
   }
   
   public function desativarUsuario($id_usuario){
       
       $this->usuarioModel->desativarUsuario($id_usuario);
   }
   
   public function getUsuario($id_usuario){
      
       return $this->usuarioModel->getUsuario($id_usuario);
   }
   
   public function alterarResponsavel($id_responsavel, $novaArea){
       
       $this->usuarioModel->alterarResponsavel($id_responsavel, $novaArea);
       
   }
   
   public function listaUsuariosAtivos(){
       
       return $this->usuarioModel->listaUser();
   }
   
   public function listaResponsaveis($id_perfil){
       
       return $this->usuarioModel->listaResponsaveis($id_perfil);
   }
   
}
