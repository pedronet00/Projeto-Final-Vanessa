<?php

namespace Php\Empresajrtoledo\Model\DAO;

use Exception;
use Php\Empresajrtoledo\Model\Entity\Parceiro;
class ParceiroDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(Parceiro $Parceiro){

        try{
            $sql = "INSERT INTO Parceiro (nome,foto,descricao) VALUES (:nome,:foto,:descricao)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome,:foto,:descricao", $Parceiro->getNome());   
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function alterar(Parceiro $Parceiro){

        try{
            $sql = "UPDATE Parceiro SET nome = :nome,:foto,:descricao WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome", $Parceiro->getNome());            
            $ps->bindValue(":id", $Parceiro->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function excluir(Parceiro $Parceiro){

        try{
            $sql = "DELETE FROM Parceiro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);         
            $ps->bindValue(":id", $Parceiro->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function consultar(){

        try {
            $sql = "SELECT * FROM Parceiro";
            return $this->dao->getConexao()->query($sql);
        }catch (Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id){

        try{
            $sql = "SELECT * FROM Parceiro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        }catch (Exception $e){
            return 0;
        }
    }
}