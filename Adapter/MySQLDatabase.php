<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 22.3.2018 г.
 * Time: 17:43
 */

namespace Adapter;


class MySQLDatabase extends Database
{
    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPass;

    public function __construct(string $dbHost, string $dbName, string $dbUser, string $dbPass)
    {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
    }

    public function connect()
    {
        $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName . ';charset=utf8';
        $this->pdo = new \PDO($dsn, $this->dbUser, $this->dbPass);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}