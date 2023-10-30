<?php

namespace Php\Empresajrtoledo\Model\Entity;

class Membro{
    private $id;
    private $Nome;
    private $Curso;
    private $Cargo;
    private $Foto;



    public function __construct($id, $Nome, $Curso, $Cargo, $Foto)
    {
        $this->setId($id);
        $this->setNome(($Nome)); 
        $this->setCurso($Curso);
        $this->setCargo(($Cargo)); 
        $this->setFoto($Foto);
    }
    public function setId($id){

        $this->id = $id;
    }

    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function setCurso($Curso){
        $this->Curso = $Curso;
    }
    public function setCargo($Cargo){
        $this->Cargo = $Cargo;
    }
    public function setFoto($Foto){
        $this->Foto = $Foto;
    }

    public function getId(){
        return $this->id;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function getCurso(){
        return $this->Curso;
    }
    public function getCargo(){
        return $this->Cargo;
    }
    public function getFoto(){
        return $this->Foto;
    }
}