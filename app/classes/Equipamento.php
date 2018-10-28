<?php

class Equipamento {
    
    private $id_equipamento;
    private $nome;
    private $tipo;
    private $marca;
    
    function __construct($id_equipamento, $nome, $tipo, $marca) {
       
        $this->id_equipamento = $id_equipamento;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->marca = $marca;
    }
    
    function getId_equipamento() {
        return $this->id_equipamento;
    }

    function getNome() {
        return $this->nome;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getMarca() {
        return $this->marca;
    }

    function setId_equipamento($id_equipamento) {
        $this->id_equipamento = $id_equipamento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }
}
