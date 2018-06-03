<?php

require __DIR__ . '/../vendor/autoload.php';

$config['displayErrorDetails'] = true;

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

include_once __DIR__ . '/../src/container.php'; 

include_once __DIR__ . '/../src/routes.php';

$app->run();