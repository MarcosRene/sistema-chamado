<?php

namespace app\controllers;

use app\core\Controller;
use app\classes\Chamado;
use app\classes\ChamadoEquipamento;
use app\models\ChamadoModel;
use app\models\AreaModel;
use app\core\Data;

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

    public function atender($id_chamado) {

        $chamadoModel = new ChamadoModel();
        $dados["chamado"] = $chamadoModel->getChamado($id_chamado);
        $dados['view'] = 'admin/atender';
        $this->load('painel', $dados);
    }

    public function mostrarArea() {

        //
        $area = new AreaModel();
        $dados["area"] = $area->lista();

        $dados["view"] = "admin/listar";
        $this->load("painel", $dados);
    }

    public function atenderChamado($id_chamado) {


        $chamadoModel = new ChamadoModel();
        $comando;
        if (isset($_POST["encerrar"])) {
            $comando = 'Encerrado';
        }

        if (isset($_POST["atender"])) {
            $comando = "Em atendimento";
        }

        if (isset($_POST["terceiros"])) {
            $comando = "Aguardando terceiros";
        }


        $chamadoModel->atenderChamado($id_chamado, $_POST['parecer'], $_POST['usuario'], $comando);

        header("location:" . URL_BASE . 'usuario');
    }

    public function aguardandoTerceiros() {

        $chamado = new chamadoModel();

        $chamado = new ChamadoModel();
        $dados["meuschamados"] = $chamado->listaMeusChamados($_SESSION['dados']->id_usuario);
        $dados["chamados"] = $chamado->infoChamados();
        $dados["naoatendidos"] = $chamado->listaNaoAtendidos();
        $dados["ematendimento"] = $chamado->listaEmAtendimento();
        $dados["encerrados"] = $chamado->listaEncerrados();
        $dados["aguardandoTerceiros"] = $chamado->listaAguardandoTerceiros();

        $dados["view"] = "admin/lista_aguardandoTerceiros";
        $this->load("painel", $dados);
    }

    public function listarChamados($status) {

        $chamado = new ChamadoModel();
        
        $dados["naoAtendidos"] = $chamado->listaChamados('Não atendido');
        $dados["emAtendimento"] = $chamado->listaChamados('Em atendimento');
        $dados["encerrados"] = $chamado->listaChamados('Encerrado');
        $dados["aguardandoTerceiros"] = $chamado->listaChamados('Aguardando terceiros');

        $dados["view"] = "admin/lista_chamados";
        $dados['chamados'] = $chamado->listaChamados($status);
     
        if($status === 'Encerrado'){
 
             $dados["view"] = "admin/listar_encerrados";

        }
        $this->load("painel", $dados);
    }
    
    public function prioridade($id_chamado){
        
        $chamadoModel = new ChamadoModel();
        $dados["chamado"] = $chamadoModel->getChamado($id_chamado);
        $dados['view'] = 'chamado/alterar_prioridade';
        $this->load('painel', $dados);
        
    }
    
    public function alterarPrioridade(){
        
        $id_chamado = isset($_POST["id_chamado"]) ? strip_tags(filter_input(INPUT_POST, "id_chamado")) : NULL;
        $prioridade = isset($_POST["prioridade"]) ? strip_tags(filter_input(INPUT_POST, "prioridade")) : NULL;
        
 
        $chamadoModel = new ChamadoModel();
        $chamadoModel->alterarPrioridade($id_chamado, $prioridade);

        header("location:" . URL_BASE . 'chamado/atender/' . $id_chamado);
         
    }


    
    public function visualizarChamado($id_chamado) {


        $chamadoModel = new ChamadoModel();
        $dados["chamado"] = $chamadoModel->getChamado($id_chamado);
        $dados['view'] = 'admin/visualizar';
        $this->load('painel', $dados);
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


        if ($tombamento == "") {


            $chamado = new Chamado();

            $chamado->setId_area($AreaModel->getCodArea($area));
            $chamado->setAbertoPor($_SESSION['dados']->id_usuario);
            $chamado->setLocal($local);
            $chamado->setStatus("Não atendido");
            $chamado->setPrioridade($prioridade);
            $chamado->setProblema($problema);

            $chamadoModel->inserirChamado($chamado);
        } else {



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

        header("location:" . URL_BASE . "usuario");
    }

    public function edite($id_area) {
        $area = new AreaModel();
        $dados["areas"] = $area->getArea($id_area);
        $dados["view"] = "admin/editar_area";
        $this->load("painel", $dados);
    }

    public function delete($id_equipamento, $excluir = null) {
        $equipamento = new EquipamentoModel();
        if ($excluir == "S") {

            $equipamento->excluir($id_equipamento);
            header("location:" . URL_BASE . "equipamento");
            exit;
        }

        $dados["equipamento"] = $equipamento->getEquipamento($id_equipamento);
        $dados["view"] = "equipamento/Delete";
        $this->load("painel", $dados);
    }

}
