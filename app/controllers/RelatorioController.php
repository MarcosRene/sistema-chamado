<?php

namespace app\controllers;

use app\core\Controller;
use app\fpdf181\FPDF;
use app\models\AreaModel;
use app\models\ChamadoModel;
use app\classes\RelatorioArea;
use app\classes\RelatorioTempoAtendimento;
use app\models\FacadeModels;

session_start();

class RelatorioController extends Controller {

    public function index() {
        
        $dados['areas'] = $this->getFacade()->listarAreas();
        $dados['view'] = 'home_relatorio';
        $this->load('painel', $dados);
    }
   
    public function relatorioArea() {

        $relatorio = new RelatorioArea();
        $chamado = new ChamadoModel();

        $area = isset($_POST["area"]) ? strip_tags(filter_input(INPUT_POST, "area")) : NULL;
        $prioridade = isset($_POST["prioridade"]) ? strip_tags(filter_input(INPUT_POST, "prioridade")) : NULL;
        $status = isset($_POST["status"]) ? strip_tags(filter_input(INPUT_POST, "status")) : NULL;

        if ($prioridade == null && $status == null) {

            $dados['area'] = $chamado->chamadosArea($_SESSION['dados']->descricaoArea);
            $relatorio->gerarRelatorio($dados);
        
        } else {
          
            $dados['area'] = $chamado->chamadosPorArea($prioridade, $status);
            $relatorio->gerarRelatorio($dados);
        }

    }
    
    public function tempoDeAtendimento() {

        $relatorio = new RelatorioTempoAtendimento();
        $dados['area'] = $this->getFacade()->listaChamados('Encerrado');
        $relatorio->gerarRelatorio($dados);

    }
    
}
