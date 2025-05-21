<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription des étudiants SMI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="afficher.php" method="post">
        <div class="container">
            <h1>Inscription des étudiants SMI</h1>
            
            <label for="fname">Nom:</label>
            <input type="text" name="nom" id="fname" required><br><br>
            
            <label for="iname">Prénom:</label>
            <input type="text" name="prenom" id="iname" required><br><br>
            
            <label for="Email">Email:</label>
            <input type="email" required placeholder="nomprenom@gmail.com" name="email" id="Email"><br><br>
            
            <label for="codeapogee">Code Apogée:</label>
            <input type="password" name="codeapogee" id="codeapogee" required><br><br>
            
            <label for="groupe">Groupe :</label>
            <input type="number" min="1" max="4" name="groupe" id="groupe" required><br><br>
            
            <label for="sujet">Sujet:</label>
            <textarea id="sujet" rows="2" cols="30" name="sujet" required></textarea><br><br>
            
            <label for="description">Description du sujet:</label>
            <textarea id="description" name="description_de_sujet" required></textarea><br><br>
            
            <label for="date_debut">Date de début:</label>
            <input type="date" name="date_de_debut" id="date_debut" required><br><br>
            
            <label for="date_fin">Date de fin:</label>
            <input type="date" name="date_de_fin" id="date_fin" required><br><br>
            
            <label for="encadrement">Encadrement:</label>
            <select name="encadrement" id="encadrement" required>
                <option value="">--------------------</option>
                <option value="prof_1">Professeur 1</option>
                <option value="prof_2">Professeur 2</option>
                <option value="prof_3">Professeur 3</option>
                <option value="prof_4">Professeur 4</option>
                <option value="prof_5">Professeur 5</option>
            </select><br><br>
            
            <div class="button-clas">
                <button type="submit" class="btn submit">Envoyer</button>
                <button type="reset" class="btn cancel">Annuler</button>
            </div>
        </div>
    </form>
</body>
</html>