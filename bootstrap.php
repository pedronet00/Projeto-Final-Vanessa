<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$router = new \Php\Empresajrtoledo\Router($method, $path);

$router->get("/noticia/inserir", 
    'Php\Empresajrtoledo\Controller\NoticiaController@inserir'
);
$router->get("/noticia/index", 
    'Php\Empresajrtoledo\Controller\noticiaController@index'
);
$router->post("/noticia/gravar", 'Php\Empresajrtoledo\Controller\NoticiaController@gravar');
$router->get("/noticia/alterar/{id}", 
    'Php\Empresajrtoledo\Controller\NoticiaController@alterar'  
);
$router->get("/noticia/excluir/{id}", 
    'Php\Empresajrtoledo\Controller\NoticiaController@excluir'
);
$router->post("/noticia/deletar/{id}", 'Php\Empresajrtoledo\Controller\NoticiaController@deletar');
$router->post("/noticia/editar/{id}", 'Php\Empresajrtoledo\Controller\NoticiaController@editar');

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
