<?php
namespace App\Controller;

use Util\Controller\Controller;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

final class ControllerLigas extends Controller
{
    public function ligas(Request $request, Response $response, Array $args)
    {
        return $this->twig->render('ligas.twig');
    }

    public function dash(Request $request, Response $response, Array $args)
    {
        switch ($args['id']) {
            case '1':
                $name = 'Amigos do Tennis';
                break;
            case '2':
                $name = 'Amantes do Tênis';
                break;
            case '3':
                $name = 'Tênis para sempres';
                break;
            default:
                $name = 'Erro';
                break;
        }

        $array = array(
            'name' => $name
        );

        return $this->twig->render('ligas/dash.twig', $array);
    }
}