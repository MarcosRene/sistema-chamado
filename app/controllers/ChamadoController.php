<?php

namespace app\controllers;

use app\core\Controller;
use app\classes\Chamado;
use app\classes\ChamadoEquipamento;
use app\core\Data;
use app\models\FacadeModels;

session_start();

class ChamadoController extends Controller {


    public function index() {
        
        $dados["view"] = "area/index";
        $this->load("painel", $dados);
    }

    public function novo() {

        $dados["area"] = $this->getFacade()->listarAreas();
        $dados['view'] = 'usuario/cadastro_chamado';
        $this->load('painel', $dados);
    }

    public function atender($id_chamado) {

        $dados["chamado"] = $this->getFacade()->getChamado($id_chamado);
        $dados['view'] = 'admin/atender';
        $this->load('painel', $dados);
    }

    public function atenderChamado($id_chamado) {

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

        $this->getFacade()->atenderChamado($id_chamado, $_POST['parecer'], $_POST['usuario'], $comando);

        header("location:" . URL_BASE . 'usuario');
    }


    public function listarChamados($status) {
        
        $dados["naoAtendidos"] = $this->getFacade()->listaChamados('Não atendido');
        $dados["emAtendimento"] = $this->getFacade()->listaChamados('Em atendimento');
        $dados["encerrados"] = $this->getFacade()->listaChamados('Encerrado');
        $dados["aguardandoTerceiros"] = $this->getFacade()->listaChamados('Aguardando terceiros');
        $dados['chamados'] = $this->getFacade()->listaChamados($status);
        $dados["view"] = "admin/lista_chamados";
       
        $this->load("painel", $dados);
    }
    
    public function prioridade($id_chamado){
        
        $dados["chamado"] = $this->getFacade()->getChamado($id_chamado);
        $dados['view'] = 'chamado/alterar_prioridade';
        $this->load('painel', $dados);
        
    }
    
    public function alterarPrioridade(){
        
        $id_chamado = isset($_POST["id_chamado"]) ? strip_tags(filter_input(INPUT_POST, "id_chamado")) : NULL;
        $prioridade = isset($_POST["prioridade"]) ? strip_tags(filter_input(INPUT_POST, "prioridade")) : NULL;
       
        $this->getFacade()->alterarPrioridade($id_chamado, $prioridade);

        header("location:" . URL_BASE . 'chamado/atender/' . $id_chamado);
         
    }
    
    public function visualizarChamado($id_chamado) {

        $dados["chamado"] = $this->getFacade()->getChamado($id_chamado);
        $dados['view'] = 'admin/visualizar';
        $this->load('painel', $dados);
    }

    public function salvar() {

        $area = isset($_POST["area"]) ? strip_tags(filter_input(INPUT_POST, "area")) : NULL;
        $local = isset($_POST["local"]) ? strip_tags(filter_input(INPUT_POST, "local")) : NULL;
        $prioridade = isset($_POST["prioridade"]) ? strip_tags(filter_input(INPUT_POST, "prioridade")) : NULL;
        $tombamento = isset($_POST["tombamento"]) ? strip_tags(filter_input(INPUT_POST, "tombamento")) : NULL;
        $nomeEquip = isset($_POST["nomeEquip"]) ? strip_tags(filter_input(INPUT_POST, "nomeEquip")) : NULL;
        $problema = isset($_POST["problema"]) ? strip_tags(filter_input(INPUT_POST, "problema")) : NULL;


        if ($tombamento == "") {

            $chamado = new Chamado();

            $chamado->setId_area($this->getFacade()->codigoArea($area));
            $chamado->setAbertoPor($_SESSION['dados']->id_usuario);
            $chamado->setLocal($local);
            $chamado->setStatus("Não atendido");
            $chamado->setPrioridade($prioridade);
            $chamado->setProblema($problema);

            $this->getFacade()->novoChamado($chamado);
       
        } else {

            $chamadoEquip = new ChamadoEquipamento();

            $chamadoEquip->setId_area($this->facade->codigoArea($area));
            $chamadoEquip->setAbertoPor($_SESSION['dados']->id_usuario);
            $chamadoEquip->setLocal($local);
            $chamadoEquip->setStatus("Não atendido");
            $chamadoEquip->setPrioridade($prioridade);
            $chamadoEquip->setProblema($problema);
            $chamadoEquip->setTombamento($tombamento);
            $chamadoEquip->setNomeEquip($nomeEquip);

            $this->getFacade()->novoChamado($chamadoEquip);
        }

        header("location:" . URL_BASE . "usuario");
    }

  
}
