<?php

namespace app\classes;

class Perfil {

    private $id_perfil;
    private $descricao;
    
    function getId_perfil() {
        return $this->id_perfil;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId_perfil($id_perfil) {
        $this->id_perfil = $id_perfil;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}
