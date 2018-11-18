<?php

namespace app\core;

class Helper {

    static function calcularTempoAbertura($dataAbertura) {

        date_default_timezone_set('America/Fortaleza');

        $data1 = date_create($dataAbertura);
        $data2 = date_create(date('Y-m-d H:i'));

        $interval = date_diff($data1, $data2);

        $dia = 'dias';
        $hora = 'horas';

        if ($interval->format('%a') == 1) {

            $dia = 'dia';
        }
        if ($interval->format('%h') == 1) {

            $hora = 'hora';
        }


        return $interval->format('%a ' . $dia . ' %h ' . $hora);
    }

    static function verificarCorStatus($status) {

        switch ($status) {

            case 'Encerrado':
                return 'encerrado';
                break;

            Case 'Em atendimento':

                return 'atendido';
                break;

            case 'Aguardando terceiros':

                return 'aguardando';
                break;

            case 'Não atendido':

                return 'nao-atendido';
                break;
        }
    }

    static function verificarAcesso($permissoes) {

        if (!isset($_SESSION['usuario']))
           header("location:" . URL_BASE . "login/sair");

        if (!in_array($_SESSION['perfil'], $permissoes))
            header("location:" . URL_BASE . "login/sair");
    }

}
