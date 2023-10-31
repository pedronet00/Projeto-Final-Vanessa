<?php

namespace Php\Empresajrtoledo\Controller;

use Php\Empresajrtoledo\Model\Entity\Parceiro;
use Php\Empresajrtoledo\Model\DAO\ParceiroDAO;

class ParceiroController
{   
    //HTTP GET
    public function parceiro() {
        require '../src/View/Parceiro/parceiro.php';
    }

    //HTTP GET
    public function inserir() {
        require '../src/View/Parceiro/inserir.php';
    }

    public function alterar($params) {        
        $parceiroDAO = new ParceiroDAO();
        $id = $params[1];
        $resultado = $parceiroDAO->consultarPorId($id);
        require '../src/View/Parceiro/alterar.php';
    }

    public function excluir($params) {
        $parceiroDAO = new ParceiroDAO();
        $id = $params[1];
        $resultado = $parceiroDAO->consultarPorId($id);
        require '../src/View/Parceiro/excluir.php';
    }

    public function gravar(){
        session_start();
        $dir = "parceiros/";
        $upload_file = $dir . basename($_FILES['imagem']['name']);
        if(move_uploaded_file($_FILES["imagem"]["tmp_name"], $upload_file)){
            $parceiro = new Parceiro('', $_POST['nome'], $upload_file, $_POST['descricao']);
            $parceiroDAO = new ParceiroDAO();
            if ($parceiroDAO->inserir($parceiro)){
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
        $parceiro = new Parceiro($params[1], $_POST['nome'], $_POST['imagem'], $_POST['descricao']);
        $parceiroDAO = new ParceiroDAO();
        session_start();
        if ($parceiroDAO->alterar($parceiro)){
            $_SESSION['editar'] = true;
        }else {
            $_SESSION['editar'] = false;
        }
        $this->index();
    }

    public function deletar($params){
        $parceiro = new Parceiro($params[1], "", "", "");
        $parceiroDAO = new ParceiroDAO();
        session_start();
        if ($parceiroDAO->excluir($parceiro)){
            $_SESSION['deletar'] = true;
        }else {
            $_SESSION['deletar'] = false;
        }
        $this->index();
    }

    public function index(){
        $parceiroDAO = new ParceiroDAO();
        $resultado = $parceiroDAO->consultar();
        require '../src/View/Parceiro/index.php';
    }
}