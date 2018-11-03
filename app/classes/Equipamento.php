<?php

namespace app\classes;

class Equipamento {

    private $id_equipamento;
    private $tombamento;
    private $descricao;
    private $marca;
    
    function getId_equipamento() {
        return $this->id_equipamento;
    }

    function getTombamento() {
        return $this->tombamento;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getMarca() {
        return $this->marca;
    }

    function setId_equipamento($id_equipamento) {
        $this->id_equipamento = $id_equipamento;
    }

    function setTombamento($tombamento) {
        $this->tombamento = $tombamento;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }
}
