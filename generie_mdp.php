<!DOCTYPE html>
<html>
<head>
    <title>Générateur de mot de passe</title>
</head>
<body>
    <h2>Générateur de mot de passe</h2>
    <form method="post">
        Longueur du mot de passe: 
        <input type="number" name="length" min="6" max="32" required>
        <input type="submit" value="Générer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?';
        $password = '';
        
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[rand(0, strlen($chars) - 1)];
        }
        
        echo "<h3>Votre mot de passe: <strong>$password</strong></h3>";
    }
    ?>
</body>
</html>