<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact</title>
</head>
<body>
    <h2>Contactez-nous</h2>
    <form method="post">
        Nom: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Message:<br>
        <textarea name="message" rows="5" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);
        
        echo "<h3>Merci pour votre message, $name!</h3>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    }
    ?>
</body>
</html>