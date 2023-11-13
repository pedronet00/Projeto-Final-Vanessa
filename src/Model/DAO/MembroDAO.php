<?php

namespace Php\Empresajrtoledo\Model\DAO;

use Exception;
use Php\Empresajrtoledo\Model\Entity\Membro;


class MembroDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(Membro $membro){
        try{
            $sql = "INSERT INTO membro (nome, curso, cargo, foto) VALUES (:nome, :curso, :cargo, :foto)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $membro->getId());
            $ps->bindValue(":Nome", $membro->getNome());
            $ps->bindValue(":Curso", $membro->getCurso());
            $ps->bindValue(":Cargo", $membro->getCargo());
            $ps->bindValue(":Foto", $membro->getFoto());
            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }

    public function alterar(Membro $membro){
        try{
            $sql = "UPDATE membro SET Nome, Curso, Cargo, Foto = :Nome, Curso, Cargo, Foto WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $membro->getId());
            $ps->bindValue(":Nome", $membro->getNome());
            $ps->bindValue(":Curso", $membro->getCurso());
            $ps->bindValue(":Cargo", $membro->getCargo());
            $ps->bindValue(":Foto", $membro->getFoto());

            return $ps->execute();

        }catch(Exception  $e){
            return 0;
        }
    }


    public function excluir(Membro $membro){

        try{
            $sql = "DELETE FROM Membro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);         
            $ps->bindValue(":id", $membro->getId());
            return $ps->execute();
        } catch(Exception $e){
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