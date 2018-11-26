<?php

namespace app\controllers;

use app\core\Controller;
use app\fpdf181\FPDF;
use app\models\AreaModel;
use app\models\ChamadoModel;
use app\classes\RelatorioArea;

session_start();

class RelatorioController extends Controller {


    public function relatorioArea(){
    
        $relatorio = new RelatorioArea();  
        $chamado = new ChamadoModel();
        
        $area = isset($_POST["area"]) ? strip_tags(filter_input(INPUT_POST, "area")) : NULL;
        $prioridade = isset($_POST["prioridade"]) ? strip_tags(filter_input(INPUT_POST, "prioridade")) : NULL;
        $status = isset($_POST["status"]) ? strip_tags(filter_input(INPUT_POST, "status")) : NULL;

        $dados['area'] = $chamado->chamadosPorArea($area, $prioridade, $status);
   
        $relatorio->gerarRelatorio($dados);
        
    }
    

    public function gerarRelatorio() {

        $area = new AreaModel();
        $dados['areas'] = $area->lista();

        $dados['view'] = 'home_relatorio';
        $this->load('painel', $dados);
    }

}
