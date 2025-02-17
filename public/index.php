<?php

// iniciar sessão
session_start();

//buscar a rota
$route = $_GET['route'] ?? 'start';

//execute route
$script = null;
switch ($route) {
    case 'start':
        $script = 'start';
        break;
    case 'game':
        $script = 'game';
        break;
    case 'gameover':
        $script = 'gameover';
        break;
    // case '404':
    //     $script = 'start';
    //     break;
    default:
        $script = '404';
        break;
}

//load data
$capitals = require __DIR__ .'/../data/capitals.php';

//load scripts/views 

require_once __DIR__ ."/../scripts/header.php";
require_once __DIR__ ."/../scripts/$script.php";
require_once __DIR__ ."/../scripts/footer.php";