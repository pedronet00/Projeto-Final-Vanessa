<?php

namespace Php\Empresajrtoledo\Model\DAO;

use Exception;
use Php\Empresajrtoledo\Model\DAO\ProcessoSeletivoConsultoresDAO;
use Php\Empresajrtoledo\Model\Entity\ProcessoSeletivoConsultores;

class ProcessoSeletivoConsultoresDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function gravar(){
        $consultores = new ProcessoSeletivoConsultores('', $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['curso'], $_POST['termo'], $_POST['ra']);
        $consultoresDAO = new ProcessoSeletivoConsultoresDAO();
        session_start();
        if($consultoresDAO->inserir($consultores)){
            $_SSSION['gravar'] = true;

        } else {
            $_SESSION['gravar'] = false;
        }
        $this->index();
    }

    public function editar($params){
        $consultores = new ProcessoSeletivoConsultores($params[1],  $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['curso'], $_POST['termo'], $_POST['ra']);
        $consultoresDAO = new ProcessoSeletivoConsultoresDAO();
        session_start();
        if($consultoresDAO->alterar($consultores)){
            $_SSSION['editar'] = true;

        } else {
            $_SESSION['editar'] = false;
        }
        $this->index();
    }

    public function deletar($params){
        $consultores = new ProcessoSeletivoConsultores($params[1], $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['curso'], $_POST['termo'], $_POST['ra']);
        $consultoresDAO = new ProcessoSeletivoConsultoresDAO();
        session_start();
        if($consultoresDAO->excluir($consultores)){
            $_SSSION['deletar'] = true;

        } else {
            $_SESSION['deletar'] = false;
        }
        $this->index();
    }

        public function index(){
            $consultoresDAO = new ProcessoSeletivoConsultoresDAO();
            $resultado = $categoriaDAO->consultar();
            require '../src/View/Categoria/index.php';
        }
    
    public function inserir (Categoria $categoria){
        try{
            $sql = "INSERT INTO categoria (descricao) VALUES (:descricao)"; 
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps-> bindValue(":descricao", $categoria->getDescricao());
            return $ps->execute();
        }   catch(Exception $e){
            return 0;
        }
    }

    public function alterar (Categoria $categoria){
        try{
            $sql = "UPDATE categoria SET descricao = :descricao WHERE id = :id"; 
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps-> bindValue(":descricao", $categoria->getDescricao());
            $ps-> bindValue(":id", $categoria->getId());
            return $ps->execute();
        }   catch(Exception $e){
            return 0;
        }
    }
    
    public function excluir (Categoria $categoria){
        try{
            $sql = "DELETE FROM categoria WHERE id = :id"; 
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps-> bindValue(":id", $categoria->getId());
            return $ps->execute();
        }   catch(Exception $e){
            return 0;
        }
    }

    public function consultar (){
        try{
            $sql = "SELECT * FROM categoria"; 
            return $this->dao->getConexao()->query($sql);
        }   catch(Exception $e){
            return 0;
        }
    }

    public function consultarPorId ($id){
        try{
            $sql = "SELECT * FROM categoria WHERE id = :id"; 
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps-> bindValue(":id",$id);
            $ps->execute();
            return $ps->fetch();
        }   catch(Exception $e){
            return 0;
        }
    }   
}
?>