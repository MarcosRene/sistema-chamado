<?php

namespace app\classes;

class RelatorioArea extends TemplateRelatorio {

    protected function corpoRelatorio($dados) {

  
        $this->Cell(190, 10, utf8_decode('Relatório de chamados abertos: '. $_SESSION['dados']->descricaoArea), 0, 0, "C");
       
        $this->Ln(15);
        $arquivo = 'relatorio.pdf';
        $tipo_pdf = 'I';

        $this->SetFont("Arial", "I", 8);
        $this->Cell(8, 7, "Id", 1, 0, "C");
        $this->Cell(20, 7, "Aberto por", 1, 0, "C");
        $this->Cell(20, 7, "Aberto em", 1, 0, "C");
        $this->Cell(30, 7, "Local", 1, 0, "C");
        $this->Cell(15, 7, "Prioridade", 1, 0, "C");
        $this->Cell(30, 7, "status", 1, 0, "C");
        $this->Cell(70, 7, utf8_decode("Descrição problema"), 1, 0, "C");
        $this->Ln();
        
        foreach ($dados['area'] as $chamado) {
            $this->Cell(8, 7, utf8_decode($chamado->id_chamado), 1, 0, "C");
            $this->Cell(20, 7,utf8_decode($chamado->login), 1, 0, "C");
            $this->Cell(20, 7, utf8_decode(date('d/m/Y', strtotime($chamado->dataAbertura))), 1, 0, "C");
            $this->Cell(30, 7, utf8_decode($chamado->local), 1, 0, "C");
            $this->Cell(15, 7, utf8_decode($chamado->prioridade), 1, 0, "C");
            $this->Cell(30, 7, utf8_decode($chamado->status), 1, 0, "C");
            $this->Cell(70, 7, utf8_decode($chamado->problema), 1, 0, "C");

            $this->Ln();
        }
   
    }

}
