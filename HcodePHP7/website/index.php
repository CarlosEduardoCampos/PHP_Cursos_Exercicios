<?php
require_once('vendor/autoload.php');

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/', function (Request $request, Response $response, array $args)
{
    $response->getBody()->write("Hello");
    return $response;
});

$app->run();
?>