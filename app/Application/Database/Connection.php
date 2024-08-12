<?php

namespace App\Application\Database;

class Connection implements ConnectionInterface
{

    public function connect(): \PDO
    {
        return new \PDO(
        'mysql:
        host=localhost;
        port=8889;
        dbname=php-framework;',
        'root', 'root');
    }
}