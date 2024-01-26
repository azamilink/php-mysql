<?php

require_once __DIR__ . '/GetConection.php';

$connection = getConection();

$sql = <<<SQL
    insert into customers(id, name, email)
    values ('eko', 'Eko', 'eko@test.com');
    SQL;

$connection->exec($sql);

$connection = null;
