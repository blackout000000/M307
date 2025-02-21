<?php
$servername = "localhost";  
$username = "root";         
$password = "root";             
$database = "m307"; 

// Verbindung erstellen
$conn = new mysqli($servername, $username, $password, $database);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
?>

