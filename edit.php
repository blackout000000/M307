<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Daten abrufen
    $sql = "SELECT * FROM kundendaten WHERE idKundendaten = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Datensatz nicht gefunden!'); window.location.href='table.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Keine ID übergeben!'); window.location.href='table.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bearbeiten</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .save-button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #d32f2f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
            border: none;
            margin-top: 20px;
        }
        .save-button:hover {
            background-color: #b71c1c;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="header">
        <h1>Mitarbeiter bearbeiten</h1>
    </div>
    <div class="content">
        <form action="update.php" method="post">
        <input type="hidden" name="idKundendaten" value="<?php echo $row['idKundendaten']; ?>">


            <label for="lg">LG:</label>
            <input type="text" id="lg" name="LG" value="<?php echo $row['LG']; ?>" required>

            <label for="anrede">Anrede:</label>
            <input type="text" id="anrede" name="Anrede" value="<?php echo $row['Anrede']; ?>" required>

            <label for="vorname">Vorname:</label>
            <input type="text" id="vorname" name="Vorname" value="<?php echo $row['Vorname']; ?>" required>

            <label for="nachname">Nachname:</label>
            <input type="text" id="nachname" name="Nachname" value="<?php echo $row['Nachname']; ?>" required>

            <label for="strasse">Strasse:</label>
            <input type="text" id="strasse" name="Strasse" value="<?php echo $row['Strasse']; ?>" required>

            <label for="plz">Postleitzahl:</label>
            <input type="text" id="plz" name="Postleitzahl" value="<?php echo $row['Postleitzahl']; ?>" required>

            <label for="ort">Ort:</label>
            <input type="text" id="ort" name="Ort" value="<?php echo $row['Ort']; ?>" required>

            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="E-Mail" value="<?php echo $row['E-Mail']; ?>" required>

            <button type="submit" class="save-button">Änderungen speichern</button>
        </form>
    </div>
</div>

</body>
</html>
