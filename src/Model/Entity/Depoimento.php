<?php

namespace Php\Empresajrtoledo\Model\Entity;

class Depoimento{
    private $id;
    private $nome;
    private $curso;
    private $ano_formatura;
    private $depoimento;

    public function __construct($id, $nome, $curso, $ano_formatura, $depoimento){
        $this->SetId($id);
        $this->SetNome($nome);
        $this->SetCurso($curso);
        $this->setAno_formatura($ano_formatura);
        $this->setDepoimento($depoimento);

    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
    public function getAno_formatura(){
        return $this->ano_formatura;
    }
    public function setAno_formatura($ano_formatura){
        $this->ano_formatura = $ano_formatura;
    }
    public function getDepoimento(){
        return $this->depoimento;
    }
    public function setDepoimento($depoimento){
        $this->depoimento = $depoimento;
    }
}
