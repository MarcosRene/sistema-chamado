<?php

namespace app\controllers;

use app\core\Controller;
use app\models\ClienteModel;
require_once 'config/acesso.php';


$permissoes = ['admin'];
verificarAcesso($permissoes);


class ClienteController extends Controller {

    public function index() {

        $cliente = new ClienteModel();
        $dados["clientes"] = $cliente->lista();
        $dados["view"] = "cliente/Index";
        $this->load("template", $dados);
    }

    public function novo() {
    //    $dados["view"] = "cliente/Create";
     //   $this->load("template", $dados);
    
         header("location:" . URL_BASE . "painel_cadastro");
        
    }

    function home() {
        $dados["view"] = "v_home";
        $this->load("template", $dados);
    }

    public function salvar() {
        $cliente = new ClienteModel();
        $id_cliente = isset($_POST["id_cliente"]) ? strip_tags(filter_input(INPUT_POST, "id_cliente")) : NULL;
        $nome = isset($_POST["txt_nome"]) ? strip_tags(filter_input(INPUT_POST, "txt_nome")) : NULL;
        $email = isset($_POST["txt_email"]) ? strip_tags(filter_input(INPUT_POST, "txt_email")) : NULL;
        $fone = isset($_POST["txt_fone"]) ? strip_tags(filter_input(INPUT_POST, "txt_fone")) : NULL;


        if ($id_cliente) {
            $cliente->editar($id_cliente, $nome, $email, $fone);
    
        } else {
            $cliente->inserir($nome, $email, $fone);
        }
        
        header("location:" . URL_BASE . "cliente");
    }

    public function edite($id_cliente) {
        
        $cliente = new ClienteModel();
        $dados["cliente"] = $cliente->getCliente($id_cliente);

        $dados["view"] = "cliente/Edite";
        $this->load("template", $dados);
    }

    public function delete($id_cliente, $excluir=null) {
        $cliente = new ClienteModel();
        if($excluir == "S"){
           
            $cliente->excluir($id_cliente);
            header("location:" . URL_BASE . "cliente");
            exit;
        }
        
        $dados["cliente"] = $cliente->getCliente($id_cliente);
        $dados["view"] = "cliente/Delete";
        $this->load("template", $dados);
    }

}
