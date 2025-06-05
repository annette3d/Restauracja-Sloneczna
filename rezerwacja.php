<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $data = $_POST['data'];
    $godzina = $_POST['godzina'];
    $osoby = $_POST['osoby'];

    $sql = "INSERT INTO rezerwacje (imie, email, telefon, data, godzina, osoby)
            VALUES (:imie, :email, :telefon, :data, :godzina, :osoby)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':imie' => $imie,
            ':email' => $email,
            ':telefon' => $telefon,
            ':data' => $data,
            ':godzina' => $godzina,
            ':osoby' => $osoby
        ]);
        echo "✅ Rezerwacja została zapisana!";
    } catch (Exception $e) {
        echo "❌ Błąd: " . $e->getMessage();
    }
}
