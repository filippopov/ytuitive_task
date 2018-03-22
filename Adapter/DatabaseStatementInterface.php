<?php
/**
 * Created by PhpStorm.
 * User: Popov
 * Date: 22.3.2018 г.
 * Time: 16:47
 */

namespace Adapter;


interface DatabaseStatementInterface
{
    public function execute(array $params = []);

    public function fetchAll();
}