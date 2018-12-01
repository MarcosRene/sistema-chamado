<?php

namespace app\core;
use app\models\FacadeModels;

class Controller {
    
    private $facade;
    
    function __construct() {
        $this->setFacade(new FacadeModels());
    }

    public function load($viewName, $viewData = array()) {
      extract($viewData);
      include "app/views/" . $viewName . ".php";
    }

    function getFacade() {
        return $this->facade;
    }

    function setFacade($facade) {
        $this->facade = $facade;
    }
}
