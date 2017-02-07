<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../config.php';
require '../vendor/autoload.php';

$app = new \Slim\App(["settings" => $config]);

$app->get('/hello/{name}', function (Request $req, Response $res) {
    $name = $req->getAttribute('name');
    $res->getBody()->write("Hello, $name");
    return $res;
});

$app->run();
