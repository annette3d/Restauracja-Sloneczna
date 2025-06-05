<?php
$host = 'sql158.lh.pl';
$db = 'serwer357598_t20';
$user = 'serwer357598_t20';
$pass = 'hH-1o-#3uWH6LElL';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('❌ Błąd połączenia z bazą danych: ' . $e->getMessage());
}
