<?php
$pdo = new PDO('mysql:host=localhost;dbname=TP10', 'root', '');

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM exercice WHERE id = ?");
$stmt->execute([$id]);

header('Location: index.php?message=Suppression réussie');
exit();
?>