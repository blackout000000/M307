<?php
require 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['idKundendaten'];
    $lg = $_POST['LG'];
    $anrede = $_POST['Anrede'];
    $vorname = $_POST['Vorname'];
    $nachname = $_POST['Nachname'];
    $strasse = $_POST['Strasse'];
    $plz = $_POST['Postleitzahl'];
    $ort = $_POST['Ort'];
    $email = $_POST['E-Mail'];

    
    $sql = "UPDATE kundendaten 
        SET LG = ?, Anrede = ?, Vorname = ?, Nachname = ?, Strasse = ?, Postleitzahl = ?, Ort = ?, `E-Mail` = ?
        WHERE idKundendaten = ?";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $lg, $anrede, $vorname, $nachname, $strasse, $plz, $ort, $email, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Daten erfolgreich aktualisiert!'); window.location.href='table.php';</script>";
    } else {
        echo "Fehler beim Speichern: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
