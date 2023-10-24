<?php

namespace Php\Empresajrtoledo\Model\DAO;

use Exception;
use Php\Empresajrtoledo\Model\Entity\ProcessoSeletivoMembros;

class ProcessoSeletivoMembrosDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(ProcessoSeletivoMembros $membros){
        try{
            $sql = "INSERT INTO processo_seletivo_membro(nome, email, telefone, curso, termo, ra) VALUES (:nome, :email, :telefone, :curso, :termo, :ra)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome", $membros->getNome());
            $ps->bindValue(":email", $membros->getEmail());
            $ps->bindValue(":telefone", $membros->getTelefone());
            $ps->bindValue(":curso", $membros->getCurso());
            $ps->bindValue(":termo", $membros->getTermo());
            $ps->bindValue(":ra", $membros->getRa());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function alterar(ProcessoSeletivoMembros $membros){
        try{
            $sql = "UPDATE processo_seletivo_membro SET nome = :nome, email = :email, telefone = :telefone, curso = :curso, termo = :termo, ra = :ra WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome", $membros->getNome());
            $ps->bindValue(":email", $membros->getEmail());
            $ps->bindValue(":telefone", $membros->getTelefone());
            $ps->bindValue(":curso", $membros->getCurso());
            $ps->bindValue(":termo", $membros->getTermo());
            $ps->bindValue(":ra", $membros->getRa());
            $ps->bindValue(":id", $membros->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function excluir(ProcessoSeletivoMembros $membros){
        try{
            $sql = "DELETE FROM processo_seletivo_membro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $membros->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM processo_seletivo_membro";
            return $this->dao->getConexao()->query($sql);
        }catch (Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * from processo_seletivo_membro WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        } catch (Exception $e){
            return 0;
        }
    }


}