<?php

namespace app\controllers;

use app\core\Controller;
use app\fpdf181\FPDF;
use app\models\AreaModel;
use app\models\ChamadoModel;

session_start();

class RelatorioController extends Controller {

    public function index() {

        $chamado = new ChamadoModel();
        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 10, utf8_decode('Relatório de chamados'), 0, 0, "C");
        $pdf->Ln(15);
        $arquivo = 'relatorio.pdf';
        $tipo_pdf = 'I';

        $area = isset($_POST["area"]) ? strip_tags(filter_input(INPUT_POST, "area")) : NULL;
        $prioridade = isset($_POST["prioridade"]) ? strip_tags(filter_input(INPUT_POST, "prioridade")) : NULL;
        $status = isset($_POST["status"]) ? strip_tags(filter_input(INPUT_POST, "status")) : NULL;


       
        $dados['area'] = $chamado->chamadosPorArea($area, $prioridade, $status);

        $pdf->SetFont("Arial", "I", 10);
        $pdf->Cell(10, 7, "Id", 1, 0, "C");
        $pdf->Cell(40, 7, "Local", 1, 0, "C");
        $pdf->Cell(25, 7, "Prioridade", 1, 0, "C");
        $pdf->Cell(40, 7, "status", 1, 0, "C");
          $pdf->Cell(70, 7, utf8_decode("Descrição problema"), 1, 0, "C");
        $pdf->Ln();

        foreach ($dados['area'] as $chamado) {
            $pdf->Cell(10, 7, utf8_decode($chamado->id_chamado), 1, 0, "C");
            $pdf->Cell(40, 7, utf8_decode($chamado->local), 1, 0, "C");
            $pdf->Cell(25, 7, utf8_decode($chamado->prioridade), 1, 0, "C");
            $pdf->Cell(40, 7, utf8_decode($chamado->status), 1, 0, "C");
            $pdf->Cell(70, 7, utf8_decode($chamado->problema), 1, 0, "C");

            $pdf->Ln();
        }

        $pdf->Output();

    }

    public function gerarRelatorio() {

        $area = new AreaModel();
        $dados['areas'] = $area->lista();

        $dados['view'] = 'home_relatorio';
        $this->load('painel', $dados);
    }

}
