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
    
    public function getArea($id_area) {

        $resultado = array();
        $sql = "SELECT * FROM area WHERE id_area = :id_area";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_area", $id_area);
        $qry->execute();

        $area = null;
        
        if ($qry->rowCount() > 0) {
            
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
            $area = new Area($resultado->id_area, $resultado->descricao);
        
        }
        
        return $area;
    }

    public function inserir($descricao) {

        $sql = "INSERT INTO area SET descricaoArea = :descricao";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", $descricao);
        $qry->execute();
    
        return $this->getDb()->lastInsertId();
    }
    
    public function editar($id_area, $descricao) {

        $sql = "UPDATE area SET descricaoArea = :descricao WHERE id_area = :id_area";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", $descricao);
        $qry->bindValue(":id_area", $id_area);
        $qry->execute();
    }
    
    public function excluir($id_area) {

        $sql = "DELETE FROM area WHERE id_area = :id_area";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_area", $id_area);
        $qry->execute();
       
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
