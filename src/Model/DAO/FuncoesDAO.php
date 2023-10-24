<?php

namespace Php\Empresajrtoledo\Model\DAO;

use Exception;
use Php\Empresajrtoledo\Model\Entity\Funcoes;


class FuncoesDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(Funcoes $funcoes){
        try{
            $sql = "INSERT INTO membro (nome, curso, cargo, foto) VALUES (:nome, curso, cargo, foto)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $funcoes->getId());
            $ps->bindValue(":Nome", $funcoes->getNome());
            $ps->bindValue(":Curso", $funcoes->getCurso());
            $ps->bindValue(":Cargo", $funcoes->getCargo());
            $ps->bindValue(":Foto", $funcoes->getFoto());
            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }

    public function alterar(Funcoes $funcoes){
        try{
            $sql = "UPDATE membro SET Nome, Curso, Cargo, Foto = :Nome, Curso, Cargo, Foto WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $funcoes->getId());
            $ps->bindValue(":Nome", $funcoes->getNome());
            $ps->bindValue(":Curso", $funcoes->getCurso());
            $ps->bindValue(":Cargo", $funcoes->getCargo());
            $ps->bindValue(":Foto", $funcoes->getFoto());

            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }

    public function excluir(Funcoes $funcoes){
        try{
            $sql = "DELETE FROM membro  WHERE id, Nome, Curso, Cargo, Foto = :id, Nome, Curso, Cargo, Foto";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $funcoes->getId());
            $ps->bindValue(":Nome", $funcoes->getNome());
            $ps->bindValue(":Curso", $funcoes->getCurso());
            $ps->bindValue(":Cargo", $funcoes->getCargo());
            $ps->bindValue(":Foto", $funcoes->getFoto());
            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM membro";
            return $this->dao->getConexao()->query($sql);
        }catch(Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * from membro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        }catch (Exception $e){
            return 0;
        }
    }
}