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