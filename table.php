<?php
require 'connection.php';

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitarbeiter Übersicht</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: auto;
            border-collapse: collapse;
            margin-top: 20px;
            table-layout: fixed;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
            word-wrap: break-word;
        }
        th {
            background-color: #d32f2f;
            color: white;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .edit-button {
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
        }
        .edit-button:hover {
            background-color: #b71c1c;
        }

    
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Mitarbeiter Übersicht</h1>
    </div>
    <div class="content">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>LG</th>
                <th>Anrede</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Strasse</th>
                <th>PLZ</th>
                <th>Ort</th>
                <th>E-Mail</th>
                <th>Bearbeiten</th>
                
            </tr>
            <?php
            $sql = "SELECT * FROM kundendaten";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['idKundendaten']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['LG']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Anrede']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Vorname']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Nachname']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Strasse']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Postleitzahl']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Ort']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['E-Mail']) . "</td>";
                
                    if (!empty($row['idKundendaten'])) {
                        echo "<td><a class='edit-button' href='edit.php?id=" . urlencode($row['idKundendaten']) . "'>Bearbeiten</a></td>";
                    } else {
                        echo "<td>Fehlende ID</td>";
                    }
                    
                    echo "</tr>";
                }
            
            } else {
                echo "<tr><td colspan='10'>Keine Daten vorhanden.</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</div>
</body>
</html>
