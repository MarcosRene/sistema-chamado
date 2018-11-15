<?php

namespace app\controllers;

use app\core\Controller;
use app\models\EquipamentoModel;
require_once 'config/acesso.php';


$permissoes = ['admin'];
verificarAcesso($permissoes);


class EquipamentoController extends Controller {

    public function index() {

      //  $equipamento = new EquipamentoModel();
     //   $dados["equipamentos"] = $equipamento->lista();
        $dados["view"] = "equipamento/index";
        $this->load("admin/painel", $dados);
    }

    public function novo() {
     
        $dados["view"] = "admin/equipamento/cadastroEquipamento";
        $this->load("admin/painel", $dados);
        
    }
    
    public function mostrarEquipamentos() {
        
        
        $equipamento = new EquipamentoModel();
        $dados["equipamento"] = $equipamento->lista();
        

        $dados["view"] = "admin/equipamento/listar";
        $this->load("admin/painel", $dados);
    }
    

    public function salvar() {
    
    
        $equipamento = new EquipamentoModel();
        $id_equipamento = isset($_POST["id_equipamento"]) ? strip_tags(filter_input(INPUT_POST, "id_equipamento")) : NULL;
        $tombamento = isset($_POST["tombamento"]) ? strip_tags(filter_input(INPUT_POST, "tombamento")) : NULL;
        $descricao = isset($_POST["descricao"]) ? strip_tags(filter_input(INPUT_POST, "descricao")) : NULL;
        $marca = isset($_POST["marca"]) ? strip_tags(filter_input(INPUT_POST, "marca")) : NULL;


        if ($id_equipamento) {
            $equipamento->editar($id_equipamento, $descricao, $tombamento, $marca);
    
        } else {
            $equipamento->inserir($descricao, $tombamento, $marca);
        }
        
        header("location:" . URL_BASE . "equipamento/mostrarequipamentos");
    }

    public function edite($id_equipamento) {
        $equipamento = new EquipamentoModel();
        $dados["equipamento"] = $equipamento->getEquipamento($id_Equipamento);

        $dados["view"] = "equipamento/edite";
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
