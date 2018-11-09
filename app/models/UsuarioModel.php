<?php

namespace app\models;

use app\core\Model;
use app\classes\Usuario;

class UsuarioModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function verificarlogin($login, $senha) {

        $sql = "SELECT * FROM usuario WHERE login = :login";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":login", $login);

        if ($qry->execute() && $qry->rowCount() > 0) {

            $row = $qry->fetch(\PDO::FETCH_OBJ);

            if (crypt($senha, $row->senha) == $row->senha) {
                
                $_SESSION['perfil'] = $this->verificarPerfil($row->id_perfil);
                $_SESSION['usuario'] = $login;
                $_SESSION['dados'] = $row;
        
                return true;
            }
        }
    }

    private function verificarPerfil($id_perfil){
        
        switch ($id_perfil){
            
            case 1:
                $_SESSION['home'] = 'usuario/listar_chamado';
                return 'usuario';
                break;
            case 2: 
                $_SESSION['home'] = 'admin/home';
                return 'tecnico';
                break;
            case 3: 
                 $_SESSION['home'] = 'admin/home';
                return 'admin';
                 
                break;
        } 
    }
    
    public function lista() {
      
        $sql = "SELECT * FROM usuario";
        $qry = $this->getDb()->query($sql);
     
        return  $qry->fetchALL(\PDO::FETCH_OBJ); 
    }

    function verificarEmail($email) {
       $sql = "SELECT * FROM usuario WHERE email = ?";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindParam(1, $email);
        if ($qry->execute() && $qry->rowCount() > 0)
            return true;
    }

    function verificarLoginDisponivel($login) {

        $sql = "SELECT * FROM usuario WHERE login = ?";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindParam(1, $login);
        if ($qry->execute() && $qry->rowCount() > 0)
            return true;
    }

    public function inserir(Usuario $usuario) {

        $sql = "INSERT INTO usuario (id_perfil, nome, sobrenome, email, login, senha) 
                VALUES (:id_perfil,:nome,:sobrenome,:email,:login, :senha )";

        $qry = $this->getDb()->prepare($sql);

        $qry->bindValue(":id_perfil", $usuario->getId_perfil());
        $qry->bindValue(":nome", $usuario->getNome());
        $qry->bindValue(":sobrenome", $usuario->getSobrenome());
        $qry->bindValue(":email", $usuario->getEmail());
        $qry->bindValue(":login", $usuario->getLogin());
        $qry->bindValue(":senha", $usuario->getSenha());

        return $qry->execute();
    }

    public function getUsuario($id_usuario) {

        $resultado = array();
        $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_usuario", $id_usuario);
        $qry->execute();

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }
        return $resultado;
    }
    
    
    public function BuscarPorCOD($cod) {
        try {
            $sql = "SELECT * FROM usuario WHERE cod_usuario = :cod";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $cod);
            $p_sql->execute();
            return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            
        }
    }

    private function populaUsuario($row) {
        
        $usuario = new Usuario();
      
        $usuario->setId_usuario($row['id_usuario']);
        $usuario->setNome($row['nome']);
        $usuario->setSobrenome($row['sobrenome']);
        $usuario->setEmail($row['email']);
        $usuario->setLogin($row['login']);
        $usuario->setSenha($row['senha']);
        $usuario->setAtivo($row['ativo']);
        $usuario->setDataCadastro($row['dataCadastro']);

        $usuario->setPerfil(Perfil_Controller::getInstance()->buscarPorCOD($row['cod_perfil']));

        return $usuario;
    }
    
    public function editar($id_cliente, $nome, $email, $fone) {

        $sql = "UPDATE cliente SET nome = :nome, email = :email, fone = :fone WHERE id_cliente = :id_cliente";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":email", $email);
        $qry->bindValue(":fone", $fone);
        $qry->bindValue(":id_cliente", $id_cliente);
        $qry->execute();
    }
    
    
    public function excluir($id_cliente) {

        $sql = "DELETE FROM cliente WHERE id_cliente = :id_cliente";

        $qry = $this->getDb()->prepare($sql);
        $qry->bindValue(":id_cliente", $id_cliente);
        $qry->execute();
        
    }
}
