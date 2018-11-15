<?php

namespace app\controllers;

use app\core\Controller;
use app\classes\Chamado;
use app\classes\ChamadoEquipamento;
use app\models\ChamadoModel;
use app\models\AreaModel;

session_start();

class ChamadoController extends Controller {

    public function index() {

        $area = new AreaModel();
        $dados["area"] = $area->lista();
        $dados["view"] = "area/index";
        $this->load("painel", $dados);
        
    }

    public function novo() {
     
        $area = new AreaModel();
        $dados["areas"] = $area->lista();
           
        $dados['view'] = 'usuario/cadastro_chamado';
        $this->load('painel', $dados);
        
    }
    
    public function mostrarArea() {
        
        //
        $area = new AreaModel();
        $dados["area"] = $area->lista();
        
        $dados["view"] = "admin/listar";
        $this->load("painel", $dados);
    }
    

    public function salvar() {
   
        
        $AreaModel = new AreaModel();
        $chamadoModel = new ChamadoModel();
    
    
        $area = isset($_POST["area"]) ? strip_tags(filter_input(INPUT_POST, "area")) : NULL;
        $local = isset($_POST["local"]) ? strip_tags(filter_input(INPUT_POST, "local")) : NULL;
        $prioridade = isset($_POST["prioridade"]) ? strip_tags(filter_input(INPUT_POST, "prioridade")) : NULL;
        $tombamento = isset($_POST["tombamento"]) ? strip_tags(filter_input(INPUT_POST, "tombamento")) : NULL;
        $nomeEquip = isset($_POST["nomeEquip"]) ? strip_tags(filter_input(INPUT_POST, "nomeEquip")) : NULL;
        $problema = isset($_POST["problema"]) ? strip_tags(filter_input(INPUT_POST, "problema")) : NULL;
        
        
        if($tombamento == ""){
           
            echo "chamdo normal";
            $chamado = new Chamado();
          
            $chamado->setId_area($AreaModel->getCodArea($area));
            $chamado->setAbertoPor($_SESSION['dados']->id_usuario);
            $chamado->setLocal($local);
            $chamado->setStatus("Não atendido");
            $chamado->setPrioridade($prioridade);
            $chamado->setProblema($problema);
            
             $chamadoModel->inserirChamado($chamado);
            
        }else{
           
            echo "chamdo equipamento";
            
            $chamadoEquip = new ChamadoEquipamento();
            
            $chamadoEquip->setId_area($AreaModel->getCodArea($area));
            $chamadoEquip->setAbertoPor($_SESSION['dados']->id_usuario);
            $chamadoEquip->setLocal($local);
            $chamadoEquip->setStatus("Não atendido");
            $chamadoEquip->setPrioridade($prioridade);
            $chamadoEquip->setProblema($problema);
            $chamadoEquip->setTombamento($tombamento);
            $chamadoEquip->setNomeEquip($nomeEquip);
             
            $chamadoModel->inserirChamadoEquip($chamadoEquip);
        }
 
        //header("location:" . URL_BASE . "chamado/novo");
    }
    
    public function validarFor(){
        
        
        
        
    }
    

    public function edite($id_area) {
        $area = new AreaModel();
        $dados["areas"] = $area->getArea($id_area);
        $dados["view"] = "admin/editar_area";
        $this->load("painel", $dados);
   
    }
   

    public function delete($id_equipamento, $excluir=null) {
        $equipamento= new EquipamentoModel();
        if($excluir == "S"){
           
            $equipamento->excluir($id_equipamento);
            header("location:" . URL_BASE . "equipamento");
            exit;
        }
        
        $dados["equipamento"] = $equipamento->getEquipamento($id_equipamento);
        $dados["view"] = "equipamento/Delete";
        $this->load("painel", $dados);
    }

}