<?php
$pdo = new PDO('mysql:host=localhost;dbname=TP10', 'root', '');

// Récupération de l'exercice à modifier
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM exercice WHERE id = ?");
$stmt->execute([$id]);
$exercice = $stmt->fetch(PDO::FETCH_ASSOC);

// Traitement de la modification
if(isset($_POST['titre'])) {
    $stmt = $pdo->prepare("UPDATE exercice SET titre = ?, auteur = ?, date_creation = ? WHERE id = ?");
    $stmt->execute([$_POST['titre'], $_POST['auteur'], $_POST['date_creation'], $id]);
    header('Location: index_ex2tp10.php?message=Modification réussie');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un exercice</title>
</head>
<body>
    <h2>Modifier l'exercice</h2>
    <form method="post">
        <label>Titre: <input type="text" name="titre" value="<?= htmlspecialchars($exercice['titre']) ?>" required></label><br>
        <label>Auteur: <input type="text" name="auteur" value="<?= htmlspecialchars($exercice['auteur']) ?>" required></label><br>
        <label>Date création: <input type="date" name="date_creation" value="<?= $exercice['date_creation'] ?>" required></label><br>
        <button type="submit">Enregistrer</button>
    </form>
    <a href="index.php">Retour</a>
</body>
</html>