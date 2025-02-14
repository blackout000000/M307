
<?php





if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "Daten erfolgreich gespeichert!";
    }
 catch (PDOException $e) {
die("Fehler: " . $e->getMessage());
}
?>

<h1>Erfolg</h1>