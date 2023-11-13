<?php

namespace Php\Empresajrtoledo\Model\Entity;

class Parceiro {

    private $id;
    private $nome;
    private $imagem;
    private $descricao;

    public function __construct($id, $nome, $imagem, $descricao)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setImagem($imagem);
        $this->setDescricao($descricao);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function setImagem($imagem){
        $this->imagem = $imagem;
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

    public function getImagem(){
        return $this->imagem;
    }

    public function getDescricao(){
        return $this->descricao;
    }
}