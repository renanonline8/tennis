<?php
namespace App\Controller;

use Util\Controller\Controller;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

final class ControllerJogos extends Controller
{
    public function jogos(Request $request, Response $response, Array $args)
    {
        return $this->twig->render('jogos.twig');
    }
}