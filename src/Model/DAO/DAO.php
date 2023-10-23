<?php

namespace Php\Empresajrtoledo;

use PDO;

class DAO{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new PDO("mysql:localhost;port=3308;dbname=empresa_junior", "root", "");
        
    }

    public function getConexao(){
        return $this->conexao;
    }
}