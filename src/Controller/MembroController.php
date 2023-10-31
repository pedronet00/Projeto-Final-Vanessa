<?php

namespace Php\Empresajrtoledo\Controller;

use Php\Empresajrtoledo\Model\DAO\MembroDAO;

class MembroController
{
    // ...

    public function inserir()
    {
        // Página para inserir um novo registro com campos Nome, Curso, Cargo e Foto.
        require '../src/View/Membro/inserir.php';
    }

    public function alterar($params)
    {
        $MembroDAO = new MembroDAO();
        $id = $params[1];
        $resultado = $MembroDAO->consultarPorId($id);
        // Página para alterar o registro com campos Nome, Curso, Cargo e Foto.
        require '../src/View/Funcoes/alterar.php';
    }

    public function excluir($params)
    {
        $MembroDAO = new MembroDAO();
        $id = $params[1];
        $resultado = $MembroDAO->consultarPorId($id);
        // Página para excluir o registro com campos Nome, Curso, Cargo e Foto.
        require '../src/View/Funcoes/excluir.php';
    }

    public function gravar()
    {
        $Nome = $_POST['Nome'];
        $Curso = $_POST['Curso'];
        $Cargo = $_POST['Cargo'];
        $Foto = $_POST['Foto'];

        // Lógica para gravar os dados no banco de dados usando FuncoesDAO
        $MembroDAO = new MembroDAO();
        session_start();
        if ($MembroDAO->inserir($Nome, $Curso, $Cargo, $Foto)) {
            $_SESSION['gravar'] = true;
        } else {
            $_SESSION['gravar'] = false;
        }
        $this->index();
    }

    public function editar($params)
    {
        $id = $params[1];
        $Nome = $_POST['Nome'];
        $Curso = $_POST['Curso'];
        $Cargo = $_POST['Cargo'];
        $Foto = $_POST['Foto'];

        // Lógica para editar os dados no banco de dados usando FuncoesDAO
        $MembroDAO = new MembroDAO();
        session_start();
        if ($MembroDAO->alterar($id, $Nome, $Curso, $Cargo, $Foto)) {
            $_SESSION['editar'] = true;
        } else {
            $_SESSION['editar'] = false;
        }
        $this->index();
    }

    public function deletar($params)
    {
        $id = $params[1];

        // Lógica para excluir o registro do banco de dados usando FuncoesDAO
        $MembroDAO = new MembroDAO();
        session_start();
        if ($MembroDAO->excluir($id)) {
            $_SESSION['deletar'] = true;
        } else {
            $_SESSION['deletar'] = false;
        }
        $this->index();
    }

    public function index()
    {
        // Lógica para listar os registros do banco de dados usando FuncoesDAO
        $MembroDAO = new MembroDAO();
        $resultado = $MembroDAO->consultar();
        // Página para listar os registros com campos Nome, Curso, Cargo e Foto.
        require '../src/View/Membro/index.php';
    }
}
