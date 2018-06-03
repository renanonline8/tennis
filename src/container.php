<?php

$container['twig'] = function($c) {
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');
    $twig = new Twig_Environment($loader);
    return $twig;
};

//Controllers
$container['ControllerDashboard'] = function($c) {
    return new \App\Controller\ControllerDashboard($c);
};

$container['ControllerLigas'] = function($c) {
    return new \App\Controller\ControllerLigas($c);
};

$container['ControllerDados'] = function($c) {
    return new \App\Controller\ControllerDados($c);
};

$container['ControllerJogos'] = function($c) {
    return new \App\Controller\ControllerJogos($c);
};