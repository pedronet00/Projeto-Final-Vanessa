<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$router = new \Php\Empresajrtoledo\Router($method, $path);

$resultado = $router->handler();

if (!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

$resultado = explode('@', $resultado);
$controller = new $resultado[0];
$action = $resultado[1];
echo $controller->$action($router->getParams());
