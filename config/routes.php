<?php

session_start();

include_once 'control/Login_Controller.php';
include_once 'control/Usuario_Controller.php';

$acao = filter_input(INPUT_POST, 'acao');


switch ($acao) {

    case 'login':

        Login_Controller::verificarLogin();
        break;

    case 'cadastrarUsuario':

        
       // var_dump(filter_input_array(INPUT_POST));
       Usuario_Controller::cadastrarUsuario();
        break;



    default:
        header("Location: ../index.php");
        break;
}