<?php

namespace app\classes;

class Usuario {
    
    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $email;
    private $login;
    private $senha;
    private $id_perfil;
    private $ativo;
    private $dataCadastro;
    
    function __construct() {    
  
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

 
    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    function getId_perfil() {
        return $this->id_perfil;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function setId_perfil($id_perfil) {
        $this->id_perfil = $id_perfil;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

        function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }


    
}
