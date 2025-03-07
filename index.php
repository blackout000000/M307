<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>m307</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.header {
    background-color: #d32f2f;
    color: white;
    text-align: center;
    padding: 20px;
}

.content {
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

td {
    padding: 10px;
    vertical-align: middle;
}

label {
    font-weight: bold;
}

input[type="text"], input[type="email"], input[type="tel"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.save-button, .edit-button {
    display: block;
    width: 100%;
    text-align: center;
    padding: 10px;
    background-color: #d32f2f;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

.save-button:hover, .edit-button:hover {
    background-color: #b71c1c;
} 
</style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>TEAM SBW</h1>
        </div>
        <div class="content">
        <form action="save.php" method="post">
                <table>
                    <tr>
                        <td><label for="lg">LG</label></td>
                        <td><input type="text" id="lg" name="lg"></td>
                    </tr>
                    <tr>
                        <td><label for="anrede">Anrede</label></td>
                        <td><input type="text" id="anrede" name="anrede"></td>
                    </tr>
                    <tr>
                        <td><label for="vorname">Vorname</label></td>
                        <td><input type="text" id="vorname" name="vorname"></td>
                    </tr>
                    <tr>
                        <td><label for="nachname">Nachname</label></td>
                        <td><input type="text" id="nachname" name="nachname"></td>
                    </tr>
                    <tr>
                        <td><label for="strasse">Strasse</label></td>
                        <td><input type="text" id="strasse" name="strasse"></td>
                    </tr>
                    <tr>
                        <td><label for="plz">Postleitzahl</label></td>
                        <td><input type="text" id="plz" name="plz"></td>
                    </tr>
                    <tr>
                        <td><label for="ort">Ort</label></td>
                        <td><input type="text" id="ort" name="ort"></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-Mail</label></td>
                        <td><input type="email" id="email" name="email"></td>
                    </tr>
                    </form>
                </table>
                <button type="submit" class="save-button">Speichern</button>

                <a href="table.php" class="edit-button">Mitarbeiter</a>
            
            
        </div>
    </div>
    
    </body>
</html>
