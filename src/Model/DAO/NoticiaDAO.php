<?php

namespace Php\Empresajrtoledo\Model\DAO;

use Exception;
use Php\Empresajrtoledo\Model\Entity\Noticia;


class NoticiaDAO{

    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function inserir(Noticia $noticia){
        try{
            $sql = "INSERT INTO noticia (titulo, usuario_id, data_noticia, hora, texto, imagem) VALUES (:titulo, :usuario_id, :data_noticia, :hora, :texto, :imagem)";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":titulo", $noticia->getTitulo());
            $ps->bindValue(":usuario_id", $noticia->getUsuario_id());
            $ps->bindValue(":data_noticia", $noticia->getData_noticia());
            $ps->bindValue(":hora", $noticia->getHora());
            $ps->bindValue(":texto", $noticia->getTexto());
            $ps->bindValue(":imagem", $noticia->getImagem());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }

    public function alterar(Noticia $noticia){
        try{
            $sql = "UPDATE noticia SET titulo = :titulo, usuario_id = :usuario_id, data_noticia = :data_noticia, hora = :hora, texto = :texto, imagem = :imagem WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":titulo", $noticia->getTitulo());
            $ps->bindValue(":usuario_id", $noticia->getUsuario_id());
            $ps->bindValue(":data_noticia", $noticia->getData_noticia());
            $ps->bindValue(":hora", $noticia->getHora());
            $ps->bindValue(":texto", $noticia->getTexto());
            $ps->bindValue(":imagem", $noticia->getImagem());
            $ps->bindValue(":id", $noticia->getId());
            return $ps->execute();
        } catch(Exception $e){
            return 0;
        }
    }
    
    public function excluir(Noticia $noticia){
        try{
            $sql = "DELETE FROM noticia  WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $noticia->getId());
            return $ps->execute();
        }catch(Exception $e){
            return 0;
        }
    }
    
    

    public function consultar(){
        try{
            $sql = "SELECT * FROM noticia";
            return $this->dao->getConexao()->query($sql);
        }catch(Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * from noticia WHERE id = :id";
            $ps = $this->dao->getConexao()->prepare($sql);
            $ps->bindValue(":id", $id);
            $ps->execute();
            return $ps->fetch();
        }catch (Exception $e){
            return 0;
        }
    }
}