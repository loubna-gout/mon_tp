<?php
$host = 'localhost'; 
$db   = 'smi_db'; 
$user = 'root';      
$pass = '';       

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->exec("CREATE TABLE IF NOT EXISTS etudiants (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(50) NOT NULL,
        prenom VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        codeapogee VARCHAR(20) NOT NULL,
        groupe INT NOT NULL,
        sujet TEXT NOT NULL,
        description_de_sujet TEXT NOT NULL,
        date_de_debut DATE NOT NULL,
        date_de_fin DATE NOT NULL,
        encadrement VARCHAR(50) NOT NULL,
        date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>