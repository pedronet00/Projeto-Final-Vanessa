<?php

namespace Php\Empresajrtoledo\Model\Entity;

class Parceiro {

    private $id;
    private $nome;
    private $foto;
    private $descricao;

    public function __construct($id, $nome, $foto, $descricao)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setFoto($foto);
        $this->setDescricao($descricao);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function setFoto($foto){
        $this->foto = $foto;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }    

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function getDescricao(){
        return $this->descricao;
    }
}