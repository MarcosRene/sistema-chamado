<?php
require 'config/config.php';
require 'app/core/FrontController.php';
require 'vendor/autoload.php';

$frontController = new FrontCOntroller;
$frontController->run();
