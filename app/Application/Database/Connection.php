<?php

namespace App\Application\Database;

use App\Application\Config\Config;

abstract class Connection implements ConnectionInterface
{
    private string $driver;
    private string $host;
    private string $dbname;
    private string $port;
    private string $user;
    private string $password;
    public function __construct()
    {
        $this->driver = Config::get('database.driver');
        $this->host = Config::get('database.host');
        $this->dbname = Config::get('database.dbname');
        $this->port = Config::get('database.port');
        $this->user = Config::get('database.user');
        $this->password = Config::get('database.password');
    }

    public function connect(): \PDO
    {
        return new \PDO(
        "{$this->driver}:
        host={$this->host};
        port={$this->port};
        dbname={$this->dbname};",
        $this->user,
        $this->password);
    }
}