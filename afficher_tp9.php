<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $codeapogee = $_POST['codeapogee'];
    $groupe = $_POST['groupe'];
    $sujet = $_POST['sujet'];
    $description =$_POST['description_de_sujet'];
    $date_debut = $_POST['date_de_debut'];
    $date_fin = $_POST['date_de_fin'];
    $encadrement = $_POST['encadrement'];

    try {
       
      $stmt = $pdo->prepare("INSERT INTO etudiants 
                              (nom, prenom, email, codeapogee, groupe, sujet, description_de_sujet, date_de_debut, date_de_fin, encadrement) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([$nom, $prenom, $email, $codeapogee, $groupe, $sujet, $description, $date_debut, $date_fin, $encadrement]);

        
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Confirmation d'inscription</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="container">
                <h1>Inscription réussie !</h1>
                <p><strong>Nom :</strong> <?= $nom ?></p>
                <p><strong>Prénom :</strong> <?= $prenom ?></p>
                <p><strong>Email :</strong> <?= $email ?></p>
                <p><strong>Groupe :</strong> <?= $groupe ?></p>
                <p><strong>Sujet :</strong> <?= $sujet ?></p>
                <p><strong>Date de début :</strong> <?= $date_debut ?></p>
                <p><strong>Date de fin :</strong> <?= $date_fin ?></p>
                <p><strong>Encadrant :</strong> <?= $encadrement ?></p>
                
                <a href="index.php" class="btn">Retour au formulaire</a>
            </div>
        </body>
        </html>
        <?php
    } catch (PDOException $e) {
        die("Erreur lors de l'inscription : " . $e->getMessage());
    }
} else {
    header('Location: index.php');
    exit();
}
?>