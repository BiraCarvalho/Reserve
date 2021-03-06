<?php

namespace Application\Poltrona;

class Model
{
    public function insert(array $request)
    {
        return \Core\Db::connection()->insert('poltronas', $request);
    }

    public function delete(array $request)
    {
        return \Core\Db::connection()->delete('poltronas', $request);
    }

    public function getOcupadas()
    {
        $queryBuilder = \Core\Db::connection()->createQueryBuilder();

        $queryBuilder
                ->select(
                    'espetaculo_id AS id',
                    'group_concat(poltrona) AS ocupadas',
                    'count(p.id) AS totalOcupadas',
                    'FORMAT(count(p.id)*valor,2,\'pt_BR\') AS valorTotal'
                    )
                ->from('poltronas','p')
                ->join('p','espetaculos','e','e.id=p.espetaculo_id')
                ->groupBy('espetaculo_id');

        $query = $queryBuilder->getSQL();

        return \Core\Db::connection()->fetchAll($query);
    }
}