<?php

namespace app\controllers;

use app\core\Controller;
use app\models\EquipamentoModel;

$permissoes = ['admin'];
verificarAcesso($permissoes);

class AreaController extends Controller {

    public function index() {

        $area = new AreaModel();
        $dados["area"] = $area->lista();
        $dados["view"] = "area/index";
        $this->load("area/painel", $dados);
        
    }

    public function novo() {
     
        $dados["view"] = "admin/area/cadastroArea";
        $this->load("admin/painel", $dados);
        
    }
    
    public function mostrarArea() {
        
        
        $area = new AreaModel();
        $dados["area"] = $area->lista();
        

        $dados["view"] = "admin/area/listar";
        $this->load("admin/painel", $dados);
    }
    

    public function salvar() {
   
        $area = new AreaModel();
        $id_area = isset($_POST["id_area"]) ? strip_tags(filter_input(INPUT_POST, "id_area")) : NULL;
        $descricao = isset($_POST["descricao"]) ? strip_tags(filter_input(INPUT_POST, "descricao")) : NULL;
     
        if ($id_area) {
            $area->editar($id_area, $descricao);
        } else {
            $area->inserir($descricao);
        }
        header("location:" . URL_BASE . "area/mostrarAreas");
    }

    public function edite($id_area) {
        $area = new AreaModel();
        $dados["area"] = $area->getArea($id_area);
        $dados["view"] = "area/edite";
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
