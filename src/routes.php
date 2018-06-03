<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/dashboard', 'ControllerDashboard:dash');
$app->get('/ligas', 'ControllerLigas:ligas');
$app->get('/ligas/{id}/dash', 'ControllerLigas:dash');
$app->get('/dados', 'ControllerDados:dados');
$app->get('/jogos', 'ControllerJogos:jogos');