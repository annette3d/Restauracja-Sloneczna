<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $email = $_POST['email'];
    $wiadomosc = $_POST['wiadomosc'];

    $sql = "INSERT INTO kontakt (imie, email, wiadomosc)
            VALUES (:imie, :email, :wiadomosc)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':imie' => $imie,
            ':email' => $email,
            ':wiadomosc' => $wiadomosc
        ]);
        echo "✅ Wiadomość została wysłana!";
    } catch (Exception $e) {
        echo "❌ Błąd: " . $e->getMessage();
    }
}
