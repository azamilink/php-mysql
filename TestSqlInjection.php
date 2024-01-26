<?php

require_once __DIR__ . '/GetConection.php';

$conn = getConection();

// $username = "admin'; #";
// $password = "salah";
// $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
// echo $sql . PHP_EOL;

// menghindari SQL injection;
$username = $conn->quote("admin'; #");
$password = $conn->quote("salah");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

$statement = $conn->query($sql);

$sukses = false;
$findUser = null;
foreach ($statement as $row) {
    // sukses;
    $sukses = true;
    $findUser = $row['username'];
}

if ($sukses) {
    echo 'Sukses login : ' . $findUser . PHP_EOL;
} else {
    echo 'Gagal login' . PHP_EOL;
}

$conn = null;
