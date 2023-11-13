<?php

namespace Php\Empresajrtoledo\Controller;

use Php\Empresajrtoledo\Model\DAO\MembroDAO;
use Php\Empresajrtoledo\Model\Entity\Membro;

class MembroController
{
     //HTTP GET
     public function parceiro() {
        require '../src/View/Membro/Tabela.php';
    }

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

    public function gravar(){
        session_start();
        $dir = "membros/";
        $upload_file = $dir . basename($_FILES['foto']['name']);
        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $upload_file)){
            $Membro = new Membro('', $_POST['nome'], $upload_file, $_POST['curso'],$upload_file ,$_POST['cargo']);
            $MembroDAO = new MembroDAO();
            if ($MembroDAO->inserir($Membro)){
                $_SESSION['gravar'] = true;
            }else {
                $_SESSION['gravar'] = false;
            }
            $this->index();
        }else{
            $_SESSION['arquivo'] = false;
        }
    }

    public function editar($params){
        $Membro = new Membro($params[1], $_POST['nome'],$_POST['curso'],$_POST['cargo'], $_POST['foto']);
        $MembroDAO = new MembroDAO();
        session_start();
        if ($MembroDAO->alterar($Membro)){
            $_SESSION['editar'] = true;
        }else {
            $_SESSION['editar'] = false;
        }
        $this->index();
    }


    public function deletar($params){
        $id = $params[1];
        $MembroDAO = new MembroDAO();
        $resultado = $MembroDAO->consultarPorId($id);
        $Membro = new Membro($params[1], "", "", "", "");
        session_start();
        if ($MembroDAO->excluir($Membro)){
            unlink($resultado['imagem']);
            $_SESSION['deletar'] = true;
        }else {
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
