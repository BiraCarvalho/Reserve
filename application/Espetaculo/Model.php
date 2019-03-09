<?php

namespace Application\Espetaculo;

class Model
{
    public $id;
    public $titulo;
    public $valor;

    public function __construct()
    {
        $this->id     = filter_input(INPUT_POST, 'id',     FILTER_SANITIZE_NUMBER_INT);
        $this->titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_MAGIC_QUOTES);
        $this->valor  = filter_input(INPUT_POST, 'valor',  FILTER_SANITIZE_MAGIC_QUOTES);
    }

    public function getAll()
    {
        $connection   = \Core\Db::connection();

        $queryBuilder = $connection->createQueryBuilder();
        $queryBuilder->select('*')->from('espetaculos');

        $query = $queryBuilder->getSQL();

        return $connection->fetchAll($query);
    }
}