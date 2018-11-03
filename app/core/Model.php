<?php

namespace app\core;

use app\core\Conexao;

abstract class Model {

    private $db;

    public function __construct() {
        $this->db = new \PDO("mysql:dbname=".BANCO.";host=".SERVIDOR,USUARIO,SENHA);
    }

    function getDb() {
        return $this->db;
    }

    private function setDb($db) {
        $this->db = $db;
    }

}
