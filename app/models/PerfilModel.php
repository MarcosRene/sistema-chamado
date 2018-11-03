<?php

namespace app\models;

use app\core\Model;

class PerfilModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function lista() {
        $sql = "SELECT * FROM perfil";
        $qry = $this->getDb()->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function getCodPerfil($descricao) {

        $sql = "SELECT * FROM perfil WHERE descricao = :descricao";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", "descricao");
        $qry->execute();
          
        $resultado = $qry->fetch(\PDO::FETCH_OBJ);

        return $resultado->id_perfil;
    }
    
    
  
    
}
