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
        session_start();
        $dir = "noticias/";
        $upload_file = $dir . basename($_FILES['imagem']['name']);
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $upload_file)) {
            $titulo = $_POST['titulo'] ?? '';
            $usuario_id = $_POST['usuario_id'] ?? '';
            $hora = $_POST['hora'] ?? '';
            $texto = $_POST['texto'] ?? '';
            $imagem = $upload_file ?? '';
            $data_noticia = $_POST['data_noticia'] ?? '';
            $noticia = new Noticia('', $titulo, $usuario_id, $data_noticia, $hora, $texto, $imagem);
            $noticiaDAO = new NoticiaDAO();
            if ($noticiaDAO->inserir($noticia)) {
                $_SESSION['gravar'] = true;
            } else {
                $_SESSION['gravar'] = false;
            }
            $_SESSION['arquivo'] = true;
            $this->index();
        } else {
            $_SESSION['arquivo'] = false;
        }
    }

    public function editar($params)
    {
        $noticia = new Noticia(
            $params[1],
            $_POST['titulo'],
            $_POST['usuario_id'],
            $_POST['data_noticia'],
            $_POST['hora'],
            $_POST['texto'],
            $_POST['imagem']
        );

        $noticiaDAO = new NoticiaDAO();
        session_start();

        if ($noticiaDAO->alterar($noticia)) {
            $_SESSION['editar'] = true;
        } else {
            $_SESSION['editar'] = false;
        }

        $this->index();
    }

    public function deletar($params)
    {
        $id = $params[1];
        $NoticiaDAO = new NoticiaDAO();
        $resultado = $NoticiaDAO->consultarPorId($id);
        $noticia = new Noticia($params[1], "", "", "", "", "", "");
        session_start();
        if ($NoticiaDAO->excluir($noticia)) {
            unlink($resultado['imagem']);
            $_SESSION['deletar'] = true;
        } else {
            $_SESSION['deletar'] = false;
        }
        $this->index();
    }

    public function index()
    {
        $noticiaDAO = new NoticiaDAO();
        $resultado = $noticiaDAO->consultar();
        require '../src/View/Noticia/index.php';
    }
}
