<?php

namespace app\controllers;

use app\core\Controller;
use app\fpdf181\FPDF;

class RelatorioController extends Controller {
   
    
    public function index() {

        $pdf = new FPDF();
        $pdf->AddPage();
        $arquivo = 'relatorio.pdf';
        $tipo_pdf = 'I';
        $pdf->Output($arquivo, $tipo_pdf);
        
    }
       
}
