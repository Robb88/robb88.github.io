<!-- pagina2.php -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informació</title>
</head>
<body>
    <h2>Informació introduïda:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p><strong>Nom:</strong> " . ($_POST["nom"]) . "</p>";
        echo "<p><strong>Cognoms:</strong> " . ($_POST["cognoms"]) . "</p>";
        echo "<p><strong>Edat:</strong> " . ($_POST["edat"]) . "</p>";
        echo "<p><strong>Adreça:</strong> " . ($_POST["adreca"]) . "</p>";
        echo "<p><strong>Província:</strong> " . ($_POST["provincia"]) . "</p>";
        echo "<p><strong>Telèfon:</strong> " . ($_POST["telefon"]) . "</p>";
        echo "<p><strong>Email:</strong> " . ($_POST["email"]) . "</p>";
        echo "<p><strong>Color preferit:</strong> <div style='width: 20px; height: 20px; background-color: " . ($_POST["color"]) . ";'></div></p>";
        echo "<p><strong>Cicle que estudia:</strong> " . ($_POST["cicle"]) . "</p>";
        echo "<p><strong>Estat civil:</strong> ".  ($_POST["estat_civil"]) . "</p>";
        
        if (isset($_POST["estudiant"])) {
            echo "<p><strong>Estat professional:</strong> Estudiant</p>";
        }

        if (isset($_POST["treballador"])) {
            echo "<p><strong>Estat professional:</strong> Treballador</p>";
        }
    }
    ?>
</body>
</html>
