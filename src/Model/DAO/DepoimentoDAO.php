<?php

namespace Php\Empresajrtoledo\Model\DAO;
use Php\Empresajrtoledo\Model\Entity\Depoimento;
use Exception;

class depoimentoDAO{
    private DAO $dao;

    public function __construct(){
        $this->dao = new DAO();
    }
    public function inserir(Depoimento $depoimento){
        try{
            $sql = 'INSERT INTO depoimento (nome, curso, ano_formatura, depoimento) VALUES (:nome, :curso, :ano_formatura, :depoimento)';
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome", $depoimento->getNome());
            $ps->bindValue(":curso", $depoimento->getCurso());
            $ps->bindValue(":ano_formatura", $depoimento->getAno_formatura());
            $ps->bindValue(":depoimento", $depoimento->getDepoimento());

            return $ps->execute();
        }catch(exception $e){
            return 0;
        }

    }
    public function alterar(Depoimento $depoimento){
        try{

            $sql = 'UPDATE depoimento SET nome = :nome, curso = :curso, ano_formatura = :ano_formatura, depoimento = :depoimento WHERE id =:id';
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome", $depoimento->getNome());
            $ps->bindValue(":id",$depoimento->getId());
            $ps->bindValue(":curso", $depoimento->getCurso());
            $ps->bindValue(":ano_formatura", $depoimento->getAno_formatura());
            $ps->bindValue(":depoimento", $depoimento->getDepoimento());
            return $ps->execute();

        }catch(exception $e){
            return 0;
        }

    }
    public function excluir(Depoimento $depoimento){
        try{

            $sql = 'DELETE FROM depoimento WHERE id =:id';
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id",$depoimento->getId());
            return $ps->execute();

        }catch(exception $e){
            return 0;
        }

    }
    public function consultar(){
        try{
            $sql="SELECT * FROM depoimento";
            return $this->dao->getConexao()->query($sql);

        }catch(Exception $e){
            return 0;
        }

    }
    public function consularPorId($id){
        try{
            $sql = "SELECT * FROM depoimento WHERE id = :id";
            $ps =$this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        }catch(Exception $e){
            return 0;
    }
    }

}