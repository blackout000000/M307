<?php
require 'connection.php';

// Prüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lg = $_POST['lg'] ?? '';
    $anrede = $_POST['anrede'] ?? '';
    $vorname = $_POST['vorname'] ?? '';
    $nachname = $_POST['nachname'] ?? '';
    $strasse = $_POST['strasse'] ?? '';
    $plz = $_POST['plz'] ?? '';
    $ort = $_POST['ort'] ?? '';
    $email = $_POST['email'] ?? '';

    // Prüfen, ob alle Felder ausgefüllt sind
    if (empty($lg) || empty($anrede) || empty($vorname) || empty($nachname) || empty($strasse) || empty($plz) || empty($ort) || empty($email)) {
        echo "<script>alert('Fehler: Alle Felder müssen ausgefüllt sein!'); window.history.back();</script>";
        exit();
    }

    // SQL-Query für das Einfügen der Daten
    $sql = "INSERT INTO kundendaten (LG, Anrede, Vorname, Nachname, Strasse, Postleitzahl, Ort, `E-Mail`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Fehler bei der Vorbereitung: " . $conn->error);
    }

    $stmt->bind_param("ssssssss", $lg, $anrede, $vorname, $nachname, $strasse, $plz, $ort, $email);

    // Wenn erfolgreich gespeichert, Erfolgsmeldung anzeigen
    if ($stmt->execute()) {
        echo "<script>alert('Daten erfolgreich gespeichert!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Fehler: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
