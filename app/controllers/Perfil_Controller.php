<?php

namespace app\controllers;
use app\core\Controller;
use app\models\PerfilDAO;

class Perfil_Controller extends Controller {
   
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

    
    
    
    public function index(){
        
        
        
    }
    
}
