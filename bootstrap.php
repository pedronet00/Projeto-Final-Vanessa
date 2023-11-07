<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$router = new \Php\Empresajrtoledo\Router($method, $path);

$router->get("/depoimento/inserir",
    'Php\Empresajrtoledo\Controller\DepoimentoController@inserir'
);

$router->post("/depoimento/gravar",
    'Php\Empresajrtoledo\Controller\DepoimentoController@gravar'
);

$router->get("/depoimento/index",
    'Php\Empresajrtoledo\Controller\DepoimentoController@index'
);

$router->get("/depoimento/alterar/{id}",
    'Php\Empresajrtoledo\Controller\DepoimentoController@alterar'
);

$router->get("/depoimento/excluir/{id}",
    'Php\Empresajrtoledo\Controller\DepoimentoController@excluir'
);

$router->post("/depoimento/editar/{id}",
    'Php\Empresajrtoledo\Controller\DepoimentoController@editar'
);

$router->post("/depoimento/deletar/{id}",
    'Php\Empresajrtoledo\Controller\DepoimentoController@deletar'
);

$router->get("/Parceiro/parceiro",
    'Php\Empresajrtoledo\Controller\ParceiroController@parceiro'
);

$router->get("/Parceiro/index",
    'Php\Empresajrtoledo\Controller\ParceiroController@index'
);

$router->get("/Parceiro/inserir",
    'Php\Empresajrtoledo\Controller\ParceiroController@inserir'
);

$router->get("/Parceiro/alterar/{id}",
    'Php\Empresajrtoledo\Controller\ParceiroController@alterar'
);

$router->get("/Parceiro/excluir/{id}",
    'Php\Empresajrtoledo\Controller\ParceiroController@excluir'
);

$router->post("/Parceiro/gravar",
    'Php\Empresajrtoledo\Controller\ParceiroController@gravar'
);

$router->post("/Parceiro/deletar/{id}",
    'Php\Empresajrtoledo\Controller\ParceiroController@deletar'
);

$router->post("/Parceiro/editar/{id}",
    'Php\Empresajrtoledo\Controller\ParceiroController@editar'
);

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
