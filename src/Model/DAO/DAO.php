<?php

namespace Php\Empresajrtoledo;

use PDO;

class DAO{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new PDO("mysql:host=localhost;port=3308;dname=banco_php",
                                "root","");    
    }
    public function getConexao()
    {
        return $this->conexao;
    }

}