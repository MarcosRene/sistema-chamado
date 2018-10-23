<?php

include_once 'conexao/Conexao.php';
include_once 'conexao/config.php';

class Usuario {

    static function verificarLoginUsuario($login, $senha) {

        $conn = Conexao::getInstance();
       
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE login = ?");
        $stmt->bindParam(1, $login);

        if ($stmt->execute() && $stmt->rowCount() > 0) {

            $row = $stmt->fetch(PDO::FETCH_OBJ);

            if ($senha == $row->senha) {
                $_SESSION['usuario_logado']['nv_acesso'] = "admin";
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

    function cadastrar_Usuario($nome,$sobrenome, $email, $login, $senha) {
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

}
