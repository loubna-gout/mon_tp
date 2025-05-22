<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login_tp8.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Vous êtes maintenant connecté.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>