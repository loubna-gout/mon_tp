<?php
session_start();

$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <form method="post">
        Nom d'utilisateur: <input type="text" name="username" required><br>
        Mot de passe: <input type="password" name="password" required><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>