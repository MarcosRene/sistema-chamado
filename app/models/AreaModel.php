<?php
namespace app\models;
use app\core\Model;

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

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function inserir($descricao) {

        $sql = "INSERT INTO area SET descricao = :descricao";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", $descricao);
        $qry->execute();
        
        return $this->getDb()->lastInsertId();
    }
    
    public function editar($id_area, $descricao) {

        $sql = "UPDATE area SET descricao = :descricao WHERE id_area = :id_area";

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
}
