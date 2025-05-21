<?php
$pdo = new PDO('mysql:host=localhost;dbname=TP10', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Ajout d'un exercice
if(isset($_POST['titre'])) {
    $stmt = $pdo->prepare("INSERT INTO exercice (titre, auteur, date_creation) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['titre'], $_POST['auteur'], $_POST['date_creation']]);
    $message = "L'exercice a été ajouté avec succès";
}

// Récupération des exercices
$exercices = $pdo->query("SELECT * FROM exercice")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des exercices</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <?php if(isset($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h2>Ajouter un exercice</h2>
    <form method="post">
        <label>Titre: <input type="text" name="titre" required></label><br>
        <label>Auteur: <input type="text" name="auteur" required></label><br>
        <label>Date création: <input type="date" name="date_creation" required></label><br>
        <button type="submit">Envoyer</button>
    </form>

    <h2>Liste des exercices</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach($exercices as $ex): ?>
        <tr>
            <td><?= $ex['id'] ?></td>
            <td><?= htmlspecialchars($ex['titre']) ?></td>
            <td><?= htmlspecialchars($ex['auteur']) ?></td>
            <td><?= $ex['date_creation'] ?></td>
            <td>
                <a href="modifier_ex2tp10.php?id=<?= $ex['id'] ?>">Modifier</a>
                <a href="supprimer_ex2tp10.php?id=<?= $ex['id'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet exercice?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>