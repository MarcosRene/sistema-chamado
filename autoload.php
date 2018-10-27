<?php

function loader($classe){
    $ext = '.php';
    $fullpath = $classe . $ext;
    
    if(file_exists($fullpath)){   
        require_once 'fullpath';
    }
}
spl_autoload_register('loader');


function loaderModel($classe){
    $ext = '.php';
    $ds = DIRECTORY_SEPARATOR;
    $fullpath = 'model' . $ds . $classe . $ext;
    
    if(file_exists($fullpath)){   
        require_once 'fullpath';
    }
}
spl_autoload_register('loaderModel');


function loaderControl($classe){
    $ext = '.php';
    $ds = DIRECTORY_SEPARATOR;
    $fullpath = 'control' . $ds . $classe . $ext;
    
    if(file_exists($fullpath)){   
        require_once 'fullpath';
    }
}
spl_autoload_register('loaderControl');


function loaderView($classe){
    $ext = '.php';
    $ds = DIRECTORY_SEPARATOR;
    $fullpath = 'view' . $ds . $classe . $ext;
    
    if(file_exists($fullpath)){   
        require_once 'fullpath';
    }
}
spl_autoload_register('loaderView');
