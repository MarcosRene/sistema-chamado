<?php
namespace app\models;
use app\core\Model;
use app\classes\Chamado;
use app\classes\ChamadoEquipamento;
use app\classes\Area;

class ChamadoModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function lista() {
       
        $sql = "SELECT * FROM chamado";
        $qry = $this->getDb()->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
        
    }
   

    public function getLista(){
        
        $model = new ChamadoModel();
        $listaBanco = $model->lista();        
    }
    
    public function inserirChamado($chamado) {

        $sql = "INSERT INTO chamado (area, abertoPor,  local, prioridade, status, problema ) 
                           VALUES (:area, :abertoPor, :local, :prioridade,:status,:problema )";

        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(":area", $chamado->getId_area());
        $qry->bindValue(":abertoPor", $chamado->getAbertoPor());
        $qry->bindValue(":status", $chamado->getStatus());
        $qry->bindValue(":local", $chamado->getLocal());
        $qry->bindValue(":prioridade", $chamado->getPrioridade());
        $qry->bindValue(":problema", $chamado->getProblema());

        return $qry->execute();
    }

    
    public function inserirChamadoEquip($chamado) {
      

        $sql = "INSERT INTO chamado (area, abertoPor, status, local, prioridade, problema, tombamento, nomeEquip ) 
                VALUES (:area,:abertoPor,:status,:local,:prioridade, :problema, :tombamento, :nomeEquip )";

        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(":area", $chamado->getId_area());
        $qry->bindValue(":abertoPor", $chamado->getAbertoPor());
        $qry->bindValue(":status", $chamado->getStatus());
        $qry->bindValue(":local", $chamado->getLocal());
        $qry->bindValue(":prioridade", $chamado->getPrioridade());
        $qry->bindValue(":problema", $chamado->getProblema());
        $qry->bindValue(":tombamento", $chamado->getTombamento());
        $qry->bindValue(":nomeEquip", $chamado->getNomeEquip());

        return $qry->execute();
        
    }

    
    public function editar($id_area, $descricao) {

        $sql = "UPDATE area SET descricao = :descricao WHERE id_area = :id_area";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":descricao", $descricao);
        $qry->bindValue(":id_area", $id_area);
        $qry->execute();
    }


    public function getChamado($id_chamado) {

        $resultado = array();
        $sql = "SELECT * FROM chamado WHERE id_chamado = :id_chamado";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_chamado", $id_chamado);
        $qry->execute();

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }
    
    
}
