<?php

namespace Core;

class Db
{
    public function connection()
    {
        $connectionParameters = require __DIR__ . '/../config/db.php';

        $connectionConfig     = new \Doctrine\DBAL\Configuration();

        return \Doctrine\DBAL\DriverManager::getConnection( $connectionParameters, $connectionConfig);
    }
}