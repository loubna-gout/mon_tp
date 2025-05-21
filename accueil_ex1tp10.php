<?php
require 'config_ex1tp10.php';

if(!isset($_SESSION['CONNECT']) || $_SESSION['CONNECT'] != 'OK') {
    header('Location: login_ex1tp10.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <h1>Hello <?= $_SESSION['login'] ?></h1>
    <a href="validation_ex1tp10.php?afaire=deconnexion">Déconnexion</a>
</body>
</html>