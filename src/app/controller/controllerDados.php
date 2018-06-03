<?php
namespace App\Controller;

use Util\Controller\Controller;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

final class ControllerDados extends Controller
{
    public function dados(Request $request, Response $response, Array $args)
    {
        return $this->twig->render('dados.twig');
    }
}