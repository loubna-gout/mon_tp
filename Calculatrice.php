<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice PHP</title>
</head>
<body>
    <h2>Calculatrice</h2>
    <form method="post">
        <label for="fname">num1:</label>
        <input type="number" name="num1" >
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <label for="fname">num2:</label>
        <input type="number" name="num2" >
        <input type="submit" value="Calculer">
    </form><br><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Erreur: Division par zéro!</p>";
                    return;
                }
                break;
        }
        echo "num1 est:$num1 <br><br>";
        echo "num2 est:$num2 <br><br>";
        echo "<h3>Résultat: $result</h3>";
    }
    ?>
</body>
</html>