<?php

namespace app\core;

class Data {

    static function calcularTempoAbertura($dataAbertura) {

     
        
        $data1 = date_create($dataAbertura);
        
        date_default_timezone_set('America/Fortaleza');
        $data2 = date_create(date('Y-m-d H:i'));
        
        $interval = date_diff($data1, $data2);
       
        return $interval->format('%a dias %h horas');
    }


}
