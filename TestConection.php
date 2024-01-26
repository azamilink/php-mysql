<?php

$host = 'localhost';
$port = 3306;
$database = 'belajar_php_mysql';
$username = 'root';
$password = '';

try {
    $conection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo 'Sukses terkoneksi ke database MySQL' . PHP_EOL;

    // menutup koneksi;
    $conection = null;
} catch (PDOException $e) {
    echo "Gagal koneksi ke database :" . $e->getMessage() . PHP_EOL;
}
