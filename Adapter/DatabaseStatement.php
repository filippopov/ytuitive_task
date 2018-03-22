<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 22.3.2018 г.
 * Time: 16:55
 */

namespace Adapter;


use PDOStatement;

class DatabaseStatement implements DatabaseStatementInterface
{
    /**
     * @var \PDOStatement
     */
    private $statement;

    public function __construct(PDOStatement $statement)
    {
        $this->statement = $statement;
    }

    public function execute(array $params = [])
    {
        return $this->statement->execute($params);
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}