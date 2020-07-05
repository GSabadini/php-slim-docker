<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use App\Domain\User\User;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get(
    '/hello/{name}', function (Request $request, Response $response, array $args) {
        $user = new User(1, "gabriel", "facina");
        $json = json_encode($user->jsonSerialize());
        $response->getBody()->write($json);
        return $response;
    }
);

$app->run();
