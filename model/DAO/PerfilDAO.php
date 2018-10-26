<?php

require_once "conexao/Conexao.php";
require_once "conexao/config.php";
require_once "model/DAO/PerfilDAO.php";

class PerfilDAO {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        
        if (!isset(self::$instance))
            self::$instance = new PerfilDAO();

        return self::$instance;
    }

    public function Inserir(Perfil $perfil) {
        try {
            $sql = "INSERT INTO usuario (decricao) VALUES ( :descricao )";

            $p_sql = Conexao::getInstance()->prepare($sql);
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
        } catch (Exception $e) {}
    }

    public function Deletar($cod) {
        try {
            $sql = "DELETE FROM perfil WHERE id_perfil = :id_perfil";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id_perfil", $cod);

            return $p_sql->execute();
        } catch (Exception $e) {}
    }

    public function buscarPorCOD($cod) {
        try {
            
            $sql = "SELECT * FROM perfil WHERE id_perfil = :id_perfil";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id_perfil", $cod);
            $p_sql->execute();
         
            return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
        
            
        } catch (Exception $e) {}
    }

    private function populaPerfil($row) {
        
        $perfil = new Perfil();
        $perfil->setId_perfil($row['id_usuario']);
        $perfil->setDescricao($row['descricao']);
  
        $perfil->setPerfil(Perfil_Controller::getInstance()->buscarPorCOD($row['id_perfil']));
        
        return $perfil;
    }

}
