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

    public function infoChamados() {

        $sql = " SELECT c.id_chamado, c.local, a.descricaoArea, c.status, c.prioridade, u.login, c.dataAbertura, c.tombamento, c.problema "
                . "FROM chamado AS c "
                . "INNER JOIN usuario AS u ON (c.abertoPor = u.id_usuario) "
                . "INNER JOIN area as a on (c.area = a.id_area)";

        $qry = $this->getDb()->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function listaMeusChamados($id_usuario) {

        $sql = "SELECT * FROM chamado WHERE abertoPor = :id_usuario";
        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(':id_usuario', $id_usuario);
        $qry->execute();

        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function listaNaoAtendidos() {

        $sql = 'SELECT * FROM chamado WHERE status = :status';
        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(':status', 'Não atendido');
        $qry->execute();

        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function listaEmAtendimento() {

        $sql = 'SELECT * FROM chamado WHERE status = :status';
        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(':status', 'Em atendimento');
        $qry->execute();

        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function listaAguardandoTerceiros() {

        $sql = 'SELECT * FROM chamado WHERE status = :status';
        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(':status', 'Aguardando terceiros');
        $qry->execute();

        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function listaEncerrados() {

        $sql = 'SELECT * FROM chamado WHERE status = :status';
        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(':status', 'Encerrado');
        $qry->execute();

        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function getLista() {

        $model = new ChamadoModel();
        $listaBanco = $model->lista();
    }

    public function inserirChamado($chamado) {

        $sql = "INSERT INTO chamado (area, abertoPor, local, prioridade, status, problema )
                                     VALUES (:area, :abertoPor, :local, :prioridade, :status, :problema )";

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
                  VALUES (:area, :abertoPor, :status, :local, :prioridade, :problema, :tombamento, :nomeEquip )";

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

   
    public function atenderChamado($id_chamado, $parecer, $id_tecnico, $status) {

        $sql = "UPDATE chamado SET parecer = :parecer, atendidoPor = :id_tecnico, status = :status WHERE id_chamado = :id_chamado";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":parecer", $parecer);
        $qry->bindValue(":id_tecnico", $id_tecnico);
        $qry->bindValue(":status", $status);
        $qry->bindValue(":id_chamado", $id_chamado); 
        $qry->execute();
  
    }


    
    

    public function getChamado($id_chamado) {

        $resultado = array();
        $sql = " SELECT c.id_chamado,c.parecer, c.local, a.descricaoArea, c.status, c.prioridade, u.login, c.dataAbertura, c.tombamento, c.problema "
                . "FROM chamado AS c "
                . "INNER JOIN usuario AS u ON (c.abertoPor = u.id_usuario) "
                . "INNER JOIN area as a on (c.area = a.id_area)"
                . "WHERE id_chamado = :id_chamado";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_chamado", $id_chamado);
        $qry->execute();

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

}
