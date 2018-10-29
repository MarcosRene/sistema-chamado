<?php

namespace app\core;

require_once 'conexao/Conexao.php';

abstract class Model{
   
    private $db;
    
    public function __construct() {
        $this->setDb(\Conexao::getInstance());
    }
    
    public function getDb() {
        return $this->db;
    }

    private function setDb($db) {
        $this->db = $db;
    }
}

