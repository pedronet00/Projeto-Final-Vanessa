<?php

namespace Php\Empresajrtoledo\Model\DAO;
use PDO;

class DAO{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new PDO
            ("mysql:host=localhost;port=3306;dbname=empresa_junior", "root", "");
    }

    public function getConexao(){
        return $this->conexao;
    }
}