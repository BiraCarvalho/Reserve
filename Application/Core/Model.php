<?php

namespace Application\Core;

class Model
{
    public $conexao;
    public $paramentros;

    public function __construct()
    {
        require __DIR__ . '/../../config.php';
        $this->paramentros = $configDb;
    }

    public function conexaoDbal()
    {    
        $conexaoConfig = new \Doctrine\DBAL\Configuration();
        return $this->conexao = \Doctrine\DBAL\DriverManager::getConnection($this->paramentros, $conexaoConfig);
    }

    // public function write($tabela, $id, $request)
    // {
    //     if(!$id)
    //     {
    //         $this->conexao->insert($tabela, $request);
    //         return global__db()->lastInsertId();
    //     }

    //     return $this->conexao->update($tabela, $request, [ 'id' => $id ] );        
    // }

    // public function delete($tabela, $id)
    // {
    //     if($id)
    //     {
    //         return $this->conexao->delete($tabela, [ 'id' => $id ]);
    //     }

    //     return false;
    // }
}