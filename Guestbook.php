<!DOCTYPE html>
<html>
<head>
    <title>Livre d'or</title>
</head>
<body>
    <h2>Laissez un message dans notre livre d'or</h2>
    <form method="post">
        Nom: <input type="text" name="name" required><br>
        Message:<br>
        <textarea name="message" rows="5" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $message = htmlspecialchars($_POST["message"]);
        $date = date("Y-m-d H:i:s");
        $entry = "$date - $name: $message\n";
        
        file_put_contents("guestbook.txt", $entry, FILE_APPEND);
    }

    if (file_exists("guestbook.txt")) {
        echo "<h2>Messages précédents:</h2>";
        $entries = file("guestbook.txt");
        $entries = array_reverse($entries); // Afficher du plus récent au plus ancien
        
        foreach ($entries as $entry) {
            echo "<p>" . htmlspecialchars($entry) . "</p>";
            echo "<hr>";
        }
    }
    ?>
</body>
</html>