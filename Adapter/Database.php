<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 22.3.2018 г.
 * Time: 17:56
 */

namespace Adapter;


abstract class Database implements DatabaseInterface
{
    /**
     * @var \PDO
     */
    protected $pdo;

    abstract public function connect();

    public function select(string $sql, array $params = [])
    {
        $stmt = new DatabaseStatement($this->pdo->prepare($sql));
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
}