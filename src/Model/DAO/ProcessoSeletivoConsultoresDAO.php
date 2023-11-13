<?php

namespace Php\Empresajrtoledo\Model\DAO;

use Exception;
use Php\Empresajrtoledo\Model\Entity\ProcessoSeletivoConsultores;

class ProcessoSeletivoConsultoresDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(ProcessoSeletivoConsultores $consultores){
        try{
            $sql = "INSERT INTO processo_seletivo_consultores (nome, email, telefone, curso, termo, ra) VALUES (:nome, :email, :telefone, :curso, :termo, :ra)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome", $consultores->getNome());
            $ps->bindValue(":email", $consultores->getEmail());
            $ps->bindValue(":telefone", $consultores->getTelefone());
            $ps->bindValue(":curso", $consultores->getCurso());
            $ps->bindValue(":termo", $consultores->getTermo());
            $ps->bindValue(":ra", $consultores->getRA());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function alterar(ProcessoSeletivoConsultores $consultores){
        try{
            $sql = "UPDATE processo_seletivo_consultores SET nome = :nome, email = :email, telefone = :telefone, curso = :curso, termo = :termo, ra = :ra  WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":nome", $consultores->getNome());
            $ps->bindValue(":email", $consultores->getEmail());
            $ps->bindValue(":telefone", $consultores->getTelefone());
            $ps->bindValue(":curso", $consultores->getCurso());
            $ps->bindValue(":termo", $consultores->getTermo());
            $ps->bindValue(":ra", $consultores->getRA());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function excluir(ProcessoSeletivoConsultores $consultores){
        try{
            $sql = "DELETE FROM processo_seletivo_consultores WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $consultores->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM processo_seletivo_consultores";
            return $this->dao->getConexao()->query($sql);
        }catch (Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * from processo_seletivo_consultores WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        } catch (Exception $e){
            return 0;
        }
    }


}