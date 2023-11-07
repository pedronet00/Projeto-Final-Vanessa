<?php 

namespace Php\Empresajrtoledo\Model\Entity;

class ProcessoSeletivoMembros {

    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $curso;
    private $termo;
    private $ra;


    public function __construct($id, $nome, $email, $telefone, $curso, $termo, $ra)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setCurso($curso);
        $this->setTermo($termo);
        $this->setRa($ra);

    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setTermo($termo){
        $this->termo = $termo;
    }

    public function getTermo(){
        return $this->termo;
    }

    public function setRa($ra){
        $this->ra = $ra;
    }

    public function getRa(){
        return $this->ra;
    }
}

?> 