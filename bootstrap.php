<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$router = new \Php\Empresajrtoledo\Router($method, $path);


$router->get("/ProcessoSeletivoMembros/index", 
    'Php\Empresajrtoledo\Controller\ProcessoSeletivoMembrosController@index'
);

$router->get("/ProcessoSeletivoMembros/inserir", 
    'Php\Empresajrtoledo\Controller\ProcessoSeletivoMembrosController@inserir'
);

$router->get("/ProcessoSeletivoMembros/alterar/{id}", 
    'Php\Empresajrtoledo\Controller\ProcessoSeletivoMembrosController@alterar'
);

$router->get("/ProcessoSeletivoMembros/excluir/{id}", 
    'Php\Empresajrtoledo\Controller\ProcessoSeletivoMembrosController@excluir'
);

$router->post("/ProcessoSeletivoMembros/gravar",
    'Php\Empresajrtoledo\Controller\ProcessoSeletivoMembrosController@gravar'
);

$router->post("/ProcessoSeletivoMembros/editar/{id}",
    'Php\Empresajrtoledo\Controller\ProcessoSeletivoMembrosController@editar');

$router->post("/ProcessoSeletivoMembros/deletar/{id}",
    'Php\Empresajrtoledo\Controller\ProcessoSeletivoMembrosController@deletar');

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