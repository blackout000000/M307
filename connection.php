<?php
$servername = "localhost";  // Datenbank-Host (z. B. localhost)
$username = "root";         // Dein MySQL-Benutzername
$password = "";             // Dein MySQL-Passwort
$database = "m307"; // Name der Datenbank

// Verbindung erstellen
$conn = new mysqli($servername, $username, $password, $database);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
echo "Erfolgreich verbunden!";
?>
