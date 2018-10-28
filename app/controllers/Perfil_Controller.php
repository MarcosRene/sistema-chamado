<?php

require_once "model/DAO/PerfilDAO.php";

class Perfil_Controller {
   
    public static $instance;

    private function __construct() {
        
    }
    public static function getInstance() {
        
        if (!isset(self::$instance))
            self::$instance = new Perfil_Controller();

        return self::$instance;
    }
    
    public function buscarPorCOD($cod) {
      
        return PerfilDAO::getInstance()->buscarPorCOD($cod);
    }
    
    
}
