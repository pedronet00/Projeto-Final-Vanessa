<?php

namespace Php\Empresajrtoledo\Controller;

use Php\Empresajrtoledo\Model\Entity\ProcessoSeletivoMembros;
use Php\Empresajrtoledo\Model\DAO\ProcessoSeletivoMembrosDAO;

class ProcessoSeletivoMembrosController{

    public function inserir(){
        require '../src/View/ProcessoSeletivoMembros/inserir.php';
    }

    public function alterar($params){
        $membrosDAO = new ProcessoSeletivoMembrosDAO();
        $id = $params[1];
        $resultado = $membrosDAO->consultarPorId($id);
        require '../src/View/ProcessoSeletivoMembros/alterar.php';
    }

    public function excluir($params){
        $membrosDAO = new ProcessoSeletivoMembrosDAO();
        $id = $params[1];
        $resultado = $membrosDAO->consultarPorId($id);
        require '../src/View/ProcessoSeletivoMembros/excluir.php';
    }

    public function gravar(){
        $membros = new ProcessoSeletivoMembros('', $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['curso'], 
        $_POST['termo'], $_POST['ra']);
        $membrosDAO = new ProcessoSeletivoMembrosDAO();
        session_start();
        if ($membrosDAO->inserir($membros)){
            $_SESSION['gravar'] = true;
        } else {
            $_SESSION['gravar'] = false;
        }
        $this->index();
    }

    public function editar($params){
        $categoria = new ProcessoSeletivoMembros($params[1], $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['curso'],
        $_POST['termo'], $_POST['ra']);
        $categoriaDAO = new ProcessoSeletivoMembrosDAO();
        session_start();
        if ($categoriaDAO->alterar($categoria)){
            $_SESSION['editar'] = true;
        } else {
            $_SESSION['editar'] = false;
        }
        $this->index();
    }

    public function deletar($params){
        $categoria = new ProcessoSeletivoMembros($params[1], "", "", "", "", "", "");
        $categoriaDAO = new ProcessoSeletivoMembrosDAO();
        session_start();
        if ($categoriaDAO->excluir($categoria)){
            $_SESSION['deletar'] = true;
        } else {
            $_SESSION['deletar'] = false;
        }
        $this->index();
    }

    public function index(){
        $categoriaDAO = new ProcessoSeletivoMembrosDAO();
        $resultado = $categoriaDAO->consultar();
        require '../src/View/ProcessoSeletivoMembros/index.php';
    }
}