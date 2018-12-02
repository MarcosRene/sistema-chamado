<?php

namespace app\classes;

use app\core\Helper;

class RelatorioTempoAtendimento extends TemplateRelatorio {

    protected function corpoRelatorio($dados) {

        $this->Cell(190, 10, utf8_decode('Relatório de tempo de atendimento'), 0, 0, "C");
       
        $this->Ln(15);
        $arquivo = 'relatorio.pdf';
        $tipo_pdf = 'I';

        $this->SetFont("Arial", "I", 7);
        $this->Cell(8, 7, "Id", 1, 0, "C");
        $this->Cell(15, 7, "Aberto por", 1, 0, "C");
        $this->Cell(15, 7, "Aberto", 1, 0, "C");
        $this->Cell(15, 7, "Encerrado", 1, 0, "C");
        $this->Cell(25, 7, "Solucionado", 1, 0, "C");
        $this->Cell(15, 7, "Prioridade", 1, 0, "C");
        $this->Cell(50, 7, "Problema", 1, 0, "C");
        $this->Cell(45, 7, "Parecer", 1, 0, "C");
   
    
        $this->Ln();
        
        foreach ($dados['area'] as $chamado) {
           
            $this->Cell(8, 7, utf8_decode($chamado->id_chamado), 1, 0, "C");
            $this->Cell(15, 7,utf8_decode($chamado->login), 1, 0, "C");
            $this->Cell(15, 7, utf8_decode(date('d/m/Y', strtotime($chamado->dataAbertura))), 1, 0, "C");
            $this->Cell(15, 7, utf8_decode(date('d/m/Y', strtotime($chamado->dataEncerrado))), 1, 0, "C");  
            $this->Cell(25, 7, Helper::diferençaDatas($chamado->dataAbertura,$chamado->dataEncerrado), 1, 0, "C");
            $this->Cell(15, 7, utf8_decode($chamado->prioridade), 1, 0, "C");
            $this->Cell(50, 7, utf8_decode($chamado->problema), 1, 0, "C");
            $this->Cell(45, 7, utf8_decode($chamado->parecer), 1, 0, "C");

            $this->Ln();
        }
   
    }

}
