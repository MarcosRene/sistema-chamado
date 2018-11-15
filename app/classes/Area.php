<?php

namespace app\classes;

class Area{
    
    private $id_area;
    private $descricao;
    
    function __construct($id_area, $descricao) {
        $this->id_area = $id_area;
        $this->descricao = $descricao;
    }

    function getId_area() {
        return $this->id_area;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId_area($id_area) {
        $this->id_area = $id_area;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}