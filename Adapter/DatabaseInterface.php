<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 22.3.2018 г.
 * Time: 17:54
 */

namespace Adapter;


interface DatabaseInterface
{
    public function connect();

    public function select(string $sql, array $params = []);
}