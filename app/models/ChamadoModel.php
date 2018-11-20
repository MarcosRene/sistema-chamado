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

    public function infoChamados() {

        $sql = " SELECT c.id_chamado, c.local, a.descricaoArea, c.status, c.prioridade, u.login, c.dataAbertura, c.tombamento, c.problema "
                . "FROM chamado AS c "
                . "INNER JOIN usuario AS u ON (c.abertoPor = u.id_usuario) "
                . "INNER JOIN area as a on (c.area = a.id_area)";

        $qry = $this->getDb()->query($sql);
        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function listaMeusChamados($id_usuario, $status) {

        $sql = 'SELECT c.id_chamado, c.local, u.login, c.dataAbertura, c.status,c.dataEncerrado, c.prioridade FROM chamado As c             
                Left JOIN usuario AS u ON (c.atendidoPor = u.id_usuario)
                WHERE status = :status
                AND abertoPor = :id_usuario';

        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(':id_usuario', $id_usuario);
        $qry->bindValue(':status', $status);
        $qry->execute();


        return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function listaChamados($status) {

        $sql = 'SELECT c.id_chamado, c.dataEncerrado, c.local, u.login, c.dataAbertura, c.status, c.prioridade ,f.nome, f.sobrenome FROM chamado As c
                LEFT JOIN usuario AS f ON (c.atendidoPor = f.id_usuario)
                INNER JOIN usuario AS u ON (c.abertoPor = u.id_usuario)
                WHERE status = :status ';

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(':status', $status);
        $qry->execute();

        return $qry->fetchALL(\PDO::FETCH_OBJ);
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

        date_default_timezone_set('America/Fortaleza');
        $sql = "UPDATE chamado SET parecer = :parecer, atendidoPor = :id_tecnico, status = :status, dataEncerrado = :dataEncerrado WHERE id_chamado = :id_chamado";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":parecer", $parecer);
        $qry->bindValue(":id_tecnico", $id_tecnico);
        $qry->bindValue(":status", $status);
        $qry->bindValue(":id_chamado", $id_chamado);
        $qry->bindValue(":dataEncerrado", date('Y-m-d H:i'));
        $qry->execute();
    }
    
    public function alterarPrioridade($id_chamado, $prioridade) {

        
        
        
        $sql = "UPDATE chamado SET prioridade = :prioridade WHERE id_chamado = :id_chamado";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":prioridade", $prioridade);
        $qry->bindValue(":id_chamado", $id_chamado);
        $qry->execute();
    }
    
   
    public function getChamado($id_chamado) {

        $resultado = array();
        $sql = ' SELECT c.id_chamado,c.parecer, c.local, a.descricaoArea, c.status, c.prioridade, u.login,
                c.dataAtendido, c.dataAbertura, c.dataEncerrado, c.tombamento, c.problema, f.nome, f.sobrenome 
                FROM chamado AS c 
                INNER JOIN usuario AS u ON (c.abertoPor = u.id_usuario) 
                left JOIN usuario AS f ON (c.atendidoPor = f.id_usuario) 
                
                INNER JOIN area as a on (c.area = a.id_area)
                WHERE id_chamado = :id_chamado';

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_chamado", $id_chamado);
        $qry->execute();

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

}
