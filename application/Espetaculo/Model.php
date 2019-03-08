<?php

namespace Application\Espetaculo;

class Model
{
    public function getData(array $data)
    {
       return $data;
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