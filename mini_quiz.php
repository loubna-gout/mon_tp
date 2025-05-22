<!DOCTYPE html>
<html>
<head>
    <title>Quiz PHP</title>
</head>
<body>
    <h2>Quiz</h2>
    
    <?php
    $questions = [
        [
            'question' => 'Quel élément html est utilisé pour définir un paragraphe',
            'answers' => ['p', 'paragraphe', 'text', 'para'],
            'correct' => 0
        ],
        [
            'question' => 'Quel langage est exécuté côté serveur?',
            'answers' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
            'correct' => 2
        ],
        [
            'question' => 'Quel symbole précède les variables en php',
            'answers' => ['#', '$', '%', '&'],
            'correct' => 1
        ]
    ];

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        echo '<form method="post">';
        foreach ($questions as $i => $question) {
            echo '<h3>' . ($i+1) . '. ' . $question['question'] . '</h3>';
            foreach ($question['answers'] as $j => $answer) {
                echo '<input type="radio" name="q' . $i . '" value="' . $j . '" required> ' . $answer . '<br>';
            }
        }
        echo '<input type="submit" value="Valider">';
        echo '</form>';
    } else {
        $score = 0;
        foreach ($questions as $i => $question) {
            $user_answer = $_POST['q' . $i];
            $is_correct = ($user_answer == $question['correct']);
            
            echo '<h3>' . ($i+1) . '. ' . $question['question'] . '</h3>';
            echo 'Votre réponse: ' . $question['answers'][$user_answer] . '<br>';
            echo 'Réponse correcte: ' . $question['answers'][$question['correct']] . '<br>';
            echo $is_correct ? 'Correct' : ' Incorrect';
            echo '<br><br>';
            
            if ($is_correct) $score++;
        }
        
        $percentage = round(($score / count($questions)) * 100);
        echo '<h3>Résultat: ' . $score . '/' . count($questions) . ' (' . $percentage . '%)</h3>';
        echo '<a href="mini_quiz.php">Recommencer</a>';
    }
    ?>
</body>
</html>