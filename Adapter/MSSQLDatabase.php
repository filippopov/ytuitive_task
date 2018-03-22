<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 22.3.2018 г.
 * Time: 17:53
 */

namespace Adapter;


class MSSQLDatabase extends Database
{
    private $dbServer;
    private $dbName;
    private $dbUser;
    private $dbPass;

    public function __construct(string $dbServer, string $dbName, string $dbUser, string $dbPass)
    {
        $this->dbServer = $dbServer;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
    }

    public function connect()
    {
        $dsn = "sqlsrv:Server=$this->dbServer;Database=$this->dbName";
        $this->pdo = new \PDO($dsn, $this->dbUser, $this->dbPass);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}