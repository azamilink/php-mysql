<?php

function getConection(): PDO
{
    $host = 'localhost';
    $port = 3306;
    $database = 'belajar_php_mysql';
    $username = 'root';
    $password = '';

    return $conection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
