<?php

namespace app\classes;

class ChamadoEquipamento extends Chamado {
  
    private $tombamento;
    private $nomeEquip;
    
    
    function getTombamento() {
        return $this->tombamento;
    }

    function getNomeEquip() {
        return $this->nomeEquip;
    }

    function setTombamento($tombamento) {
        $this->tombamento = $tombamento;
    }

    function setNomeEquip($nomeEquip) {
        $this->nomeEquip = $nomeEquip;
    }

}
