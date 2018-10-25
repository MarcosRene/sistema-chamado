<?php

include_once 'conexao/Conexao.php';
include_once 'conexao/config.php';
include_once 'model/Usuario.php';

class UsuarioDAO {

    static function verificarLoginUsuario($login, $senha) {

        $conn = Conexao::getInstance();

        $stmt = $conn->prepare("SELECT * FROM usuario WHERE login = ?");
        $stmt->bindParam(1, $login);

        if ($stmt->execute() && $stmt->rowCount() > 0) {

            $row = $stmt->fetch(PDO::FETCH_OBJ);

            if ($senha == $row->senha) {
                $_SESSION['usuario_logado']['nv_acesso'] = "cliente";
                $_SESSION['usuario_logado']['dados'] = $row;
                return true;
            }
        }
    }

    function verificarLoginAdmin($email) {

        $conn = Conexao::getInstance();
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->bindParam(1, $email);

        if ($stmt->execute() && $stmt->rowCount() > 0)
            return true;
    }

    function listarAdmins() {
        $conn = Conexao::getInstance();
        $stmt = $conn->prepare("SELECT * FROM usuario");

        if ($stmt->execute()) {
            $users = $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        return $users;
    }

    function cadastrar_Usuario($nome, $sobrenome, $email, $login, $senha) {
        $conn = Conexao::getInstance();
        $stmt = $conn->prepare("INSERT INTO usuario(nome,sobrenome, email, login, senha) VALUES(?, ?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $sobrenome);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $login);
        $stmt->bindParam(5, $senha);

        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public function Inserir(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario (nome, sobrenome, email, senha, ativo, cod_perfil) 
                VALUES ( :nome, :email, :senha, :ativo, :id_perfil)";

            $p_sql = Conexao::getInstance()->prepare($sql);


            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":ativo", $usuario->getAtivo());
            $p_sql->bindValue(":id_perfil", $usuario->getId_perfil());


            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " .
                    $e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    public function BuscarPorCOD($cod) {
        try {
            $sql = "SELECT * FROM usuario WHERE cod_usuario = :cod";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":cod", $cod);
            $p_sql->execute();
            return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
      
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
                            getCode() . " Mensagem: " . $e->getMessage());
        }
    }

    private function populaUsuario($row) {
        $usuario = new Usuario;
        $usuario->setId_usuario($row['id_usuario']);
        $usuario->setNome($row['nome']);
        $usuario->setSobrenome($row['sobrenome']);
        $usuario->setEmail($row['email']);
        $usuario->setLogin($row['login']);
        $usuario->setSenha($row['senha']);
        $usuario->setAtivo($row['ativo']);
        $usuario->setDataCadastro($row['dataCadastro']);
        
        $usuario->setPerfil(ControllerPerfil::getInstance()->buscarPorCOD($row['cod_perfil']));
        
        return $usuario;
    }

}
