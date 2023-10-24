<?php

namespace Php\Empresajrtoledo\Model\Entity;

class Noticia{
    private $id;
    private $titulo;
    private $usuario_id; //lucas benicio irá fornecer apartir da sessão
    private $data_noticia;
    private $hora;
    private $texto;
    private $imagem;



    public function __construct($id, $titulo, $usuario_id, $data_noticia, $hora, $texto, $imagem)
    {
        $this->setId($id);
        $this->setTitulo(($titulo)); 
        $this->setUsuario_id($usuario_id);
        $this->setData_noticia(($data_noticia)); 
        $this->setHora($hora);
        $this->setTexto(($texto));   
        $this->setImagem(($imagem));  
    }
    public function setId($id){

        $this->id = $id;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    public function setData_noticia($data_noticia){
        $this->data_noticia = $data_noticia;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function setTexto($texto){
        $this->texto = $texto;
    }

    public function setImagem($imagem){
        $this->imagem = $imagem;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getUsuario_id(){
        return $this->usuario_id;
    }

    public function getData_noticia(){
        return $this->data_noticia;
    }

    public function getHora(){
        return $this->hora;
    }

    public function getTexto(){
        return $this->texto;
    }

    public function getImagem(){
        return $this->imagem;
    }
}