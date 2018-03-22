<?php

spl_autoload_register(function ($class) {
   require_once $class . '.php';
});

$mySQLdb = new \Adapter\MySQLDatabase(
    Config\MySQLDbConfig::DB_HOST,
    Config\MySQLDbConfig::DB_NAME,
    Config\MySQLDbConfig::DB_USER,
    Config\MySQLDbConfig::DB_PASS
);

$mySQLdb->connect();
$mySQLdbResult = $mySQLdb->select('SELECT * FROM ytuitive_test WHERE name = :name', [':name' => 'test1']);
var_dump($mySQLdbResult);


$msSQL = new \Adapter\MSSQLDatabase(
    Config\MsSQLDbConfig::DB_SERVER,
    Config\MsSQLDbConfig::DB_NAME,
    Config\MsSQLDbConfig::DB_USER,
    Config\MsSQLDbConfig::DB_PASS
);

$msSQL->connect();
$msSQLResult = $msSQL->select('SELECT * FROM ytuitive_test');
var_dump($msSQLResult);









