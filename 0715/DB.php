<?php
//DB接続設定
$dsn = 'mysql:host=localhost;dbname=kojin;charset=utf8';
$user = 'kojin';
$password = 'password';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (Exception $e) {
    echo 'Error' . $e->getMessage();
    die();
}

