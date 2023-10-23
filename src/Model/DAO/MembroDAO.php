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

    public function inserir(Membro $Membro){

        try{
            $sql = "INSERT INTO Membro (descricao) VALUES (:descricao)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":descricao", $Membro->getDescricao());   
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function alterar(Membro $Membro){

        try{
            $sql = "UPDATE Membro SET descricao = :descricao WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":descricao", $Membro->getDescricao());            
            $ps->bindValue(":id", $Membro->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function excluir(Membro $Membro){

        try{
            $sql = "DELETE FROM Membro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);         
            $ps->bindValue(":id", $Membro->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function consultar(){

        try {
            $sql = "SELECT * FROM Membro";
            return $this->dao->getConexao()->query($sql);
        }catch (Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id){

        try{
            $sql = "SELECT * FROM Membro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        }catch (Exception $e){
            return 0;
        }
    }
}