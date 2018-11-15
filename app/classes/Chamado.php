<?php

namespace app\classes;

class Chamado {
  
    private $id_chamado;
    private $id_area;
    private $abertoPor;
    private $atendidoPor;
    private $prioridade;
    private $local;
    private $status;
    private $dataAbertura;
    private $dataAtendido;
    private $dataEncerrado;
    private $problema;
    private $parecer;
    
    
    function getId_chamado() {
        return $this->id_chamado;
    }

    function getId_area() {
        return $this->id_area;
    }

    function getAbertoPor() {
        return $this->abertoPor;
    }

    function getAtendidoPor() {
        return $this->atendidoPor;
    }

    function getPrioridade() {
        return $this->prioridade;
    }

    function getLocal() {
        return $this->local;
    }

    function getStatus() {
        return $this->status;
    }

    function getDataAbertura() {
        return $this->dataAbertura;
    }

    function getDataAtendido() {
        return $this->dataAtendido;
    }

    function getDataEncerrado() {
        return $this->dataEncerrado;
    }

    function getProblema() {
        return $this->problema;
    }

    function getParecer() {
        return $this->parecer;
    }

    function setId_chamado($id_chamado) {
        $this->id_chamado = $id_chamado;
    }

    function setId_area($id_area) {
        $this->id_area = $id_area;
    }

    function setAbertoPor($abertoPor) {
        $this->abertoPor = $abertoPor;
    }

    function setAtendidoPor($atendidoPor) {
        $this->atendidoPor = $atendidoPor;
    }

    function setPrioridade($prioridade) {
        $this->prioridade = $prioridade;
    }

    function setLocal($local) {
        $this->local = $local;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDataAbertura($dataAbertura) {
        $this->dataAbertura = $dataAbertura;
    }

    function setDataAtendido($dataAtendido) {
        $this->dataAtendido = $dataAtendido;
    }

    function setDataEncerrado($dataEncerrado) {
        $this->dataEncerrado = $dataEncerrado;
    }

    function setProblema($problema) {
        $this->problema = $problema;
    }

    function setParecer($parecer) {
        $this->parecer = $parecer;
    }


}
