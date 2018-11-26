<?php

namespace app\classes;

use app\models\ChamadoModel;
use app\fpdf181\FPDF;

abstract class TemplateRelatorio extends FPDF {

    public final function gerarRelatorio($dados) {

        $chamado = new ChamadoModel();
   
        $this->AddPage();
        $this->SetFont('Arial', 'B', 12);

        $this->cabecalho();
        $this->corpoRelatorio($dados);
        $this->rodape();

        $this->Output();
    }

    private final function cabecalho() {

          $this->Image(URL_BASE.'assets/img/cab.png', 26, 8, 160);
          $this->Ln(25);
       
    }

    abstract protected function corpoRelatorio($dados);

    private final function rodape() {
     
        
        date_default_timezone_set('America/Fortaleza');
     
          // Position at 1.5 cm from bottom
          $this->SetY(-31);
          $this->SetFont('Arial', 'I', 9);
          $this->Cell(0, 10, utf8_decode('gerador por: '.$_SESSION['dados']->login . '           em: ' . date('d-m-Y H:i') ) , 0, 0, 'R');
        

        
        
    }

}
