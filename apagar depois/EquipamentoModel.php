<?php

namespace app\models;

use app\core\Model;

class EquipamentoModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function lista() {
        $sql = "SELECT * FROM equipamento";
        $qry = $this->getDb()->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function getEquipamento($id_equipamento) {

        $resultado = array();
        $sql = "SELECT * FROM equipamento WHERE id_equipamento = :id_equipamento";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_equipamento", $id_equipamento);
        $qry->execute();

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function inserir($descricao, $tombamento, $marca) {

        $sql = "INSERT INTO equipamento SET descricao = :descricao, tombamento = :tombamento, marca = :marca";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", $descricao);
        $qry->bindValue(":tombamento", $tombamento);
        $qry->bindValue(":marca", $marca);
        $qry->execute();
        
        return $this->getDb()->lastInsertId();
    }

    
    
    public function editar($id_equipamento, $descricao, $tombamento, $marca) {

        $sql = "UPDATE equipamento SET descricao = :descricao, tombamento = :tombamento, marca = :marca WHERE id_equipamento = :id_equipamento";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", $descricao);
        $qry->bindValue(":tombamento", $tombamento);
        $qry->bindValue(":marca", $marca);
        $qry->bindValue(":id_equipamento", $id_equipamento);
        $qry->execute();
    }
    
    
    public function excluir($id_equipamento) {

        $sql = "DELETE FROM equipamento WHERE id_equipamento = :id_equipamento";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_equipamento", $id_equipamento);
        $qry->execute();
        
    }

}
