<?php
namespace app\models;
use app\core\Model;
use app\classes\Area;

class AreaModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function lista() {
        $sql = "SELECT * FROM area";
        $qry = $this->getDb()->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }
  
    
    public function getCodArea($descricao) {
        
        $sql = "SELECT * FROM area WHERE descricaoArea = :descricao";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", $descricao);
        $qry->execute();
          
       $result =  $qry->fetch(\PDO::FETCH_OBJ);
        return $result->id_area;
    }

    
 }
