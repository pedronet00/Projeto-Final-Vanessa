<?php

namespace Php\Empresajrtoledo\Controller;

use Php\Empresajrtoledo\Model\Entity\Noticia;
use Php\Empresajrtoledo\Model\DAO\NoticiaDAO;

class NoticiaController
{

    //http get

    public function inserir()
    {
        require '../src/View/Noticia/inserir.php';
    }
    public function alterar($params)
    {
        $noticiaDAO = new NoticiaDAO();
        $id = $params[1];
        $resultado = $noticiaDAO->consultarPorId($id);
        require '../src/View/Noticia/alterar.php';
    }
    public function excluir($params)
    {
        $noticiaDAO = new NoticiaDAO();
        $id = $params[1];
        $resultado = $noticiaDAO->consultarPorId($id);
        require '../src/View/Noticia/excluir.php';
    }

    public function gravar()
    {
        $titulo = $_POST['titulo'] ?? ''; 
        $usuario_id = $_POST['usuario_id'] ?? ''; 
        $hora = $_POST['hora'] ?? ''; 
        $texto = $_POST['texto'] ?? ''; 
        $imagem = $_POST['imagem'] ?? ''; 
        $data_noticia = $_POST['data_noticia'] ?? ''; 
    
        $noticia = new Noticia('', $usuario_id, $hora, $titulo, $texto, $imagem, $data_noticia); 
        $noticiaDAO = new NoticiaDAO();
        session_start();
        if ($noticiaDAO->inserir($noticia)) {
            $_SESSION['gravar'] = true;
        } else {
            $_SESSION['gravar'] = false;
        }
        $this->index();
    }
    


    // public function editar($params)
    // {
    //     $noticia = new Noticia($params[], $_POST['']);
    //     $noticiaDAO = new NoticiaDAO();
    //     session_start();
    //     if ($noticiaDAO->alterar($noticia)) {
    //         $_SESSION['editar'] = true;
    //     } else {
    //         $_SESSION['editar'] = false;
    //     }
    //     $this->index();
    // }

    // public function deletar($params)
    // {
    //     $noticia = new Noticia($params[1],"");
    //     $noticiaDAO = new NoticiaDAO();
    //     session_start();
    //     if ($noticiaDAO->excluir($noticia)) {
    //         $_SESSION['deletar'] = true;
    //     } else {
    //         $_SESSION['deletar'] = false;
    //     }
    //     $this->index();
    // }


    public function index(){
        $noticiaDAO = new NoticiaDAO();
        $resultado = $noticiaDAO->consultar();
        require '../src/View/Noticia/index.php';
    }
}
