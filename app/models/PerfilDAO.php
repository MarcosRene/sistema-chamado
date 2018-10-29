<?php

namespace app\models;

use app\core\Model;
use app\classes\Perfil;

class PerfilDAO extends Model {

    public static $instance;

    private function __construct() {
        parent::__construct();
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new PerfilDAO();
        return self::$instance;
    }

    public function Inserir(Perfil $perfil) {
        try {
            $sql = "INSERT INTO usuario (decricao) VALUES ( :descricao )";

            $p_sql = getDb()->prepare($sql);
            $p_sql->bindValue(":descricao", $perfil->getDescricao());
            return $p_sql->execute();
        } catch (Exception $e) {
            
        }
    }

    public function Editar(Perfil $perfil) {
        try {
            $sql = "UPDATE perfil set descricao = :descricao WHERE id_perfil = :id_perfil";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":decricao", $perfil->getDescricao());
            $p_sql->bindValue(":id_perfil", $perfil->getId_perfil());

            return $p_sql->execute();
        } catch (Exception $e) {
            
        }
    }

    public function Deletar($cod) {
        try {
            $sql = "DELETE FROM perfil WHERE id_perfil = :id_perfil";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id_perfil", $cod);

            return $p_sql->execute();
        } catch (Exception $e) {
            
        }
    }

    public function lista() {
        $sql = "SELECT * FROM perfil";
        $qry = Conexao::getInstance()->prepare($sql);
        $lista = $qry->fetchALL(\PDO::FETCH_OBJ);

        $listaPerfil = new ArrayObject();

        foreach ($lista as $perfil) {
            $perf = new Perfil();
            $perf->setId_perfil(perfil["id_perfil"]);
            $perf->setDescricao($perfil["descricao"]);

            $listaPerfil[] = $perf;
        }
        return $listaPerfil;
    }

    public function buscarPorCOD($cod) {

        $resultado = array();
        $perfil = new Perfil();

        $sql = "SELECT * FROM perfil WHERE id_perfil = :id_perfil";
        $p_sql = parent::getDb()->prepare($sql);
        $p_sql->bindValue(":id_perfil", $cod);
        $p_sql->execute();

        if ($p_sql->rowCount() > 0) {

            $resultado = $p_sql->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }

}
