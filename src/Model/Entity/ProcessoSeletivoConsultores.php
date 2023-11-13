<?php

namespace Php\Empresajrtoledo\Model\Entity;

class ProcessoSeletivoConsultores {
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $curso;
    private $termo;
    private $ra;

    public function __construct ($id, $nome, $email, $telefone, $curso, $termo, $ra)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setCurso($curso);
        $this->setTermo($termo);
        $this->setRA($ra);
    }

    public function setId ($id)
    {
       $this -> id = $id;
    }

    public function setNome ($nome)
    {
       $this -> nome = $nome;
    }

    public function setEmail ($email)
    {
       $this -> email = $email;
    }

    public function setTelefone ($telefone)
    {
       $this -> telefone = $telefone;
    }

    public function setCurso ($curso)
    {
       $this -> curso = $curso;
    }

    public function setTermo ($termo)
    {
       $this -> termo = $termo;
    }

    public function setRA ($ra)
    {
       $this -> ra = $ra;
    }

    public function getId(){
        return $this -> id;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function getTelefone(){
        return $this -> telefone;
    }

    public function getCurso(){
        return $this -> curso;
    }

    public function getTermo(){
        return $this -> termo;
    }

    public function getRA(){
        return $this -> ra;
    }

}