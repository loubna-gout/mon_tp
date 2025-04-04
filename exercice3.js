// 1. Préparer les questions
const QUESTIONS = [
    ["Quelle est la capitale de Maroc ?", "Rabat"],
    ["Quelle est la plus grande ville du Maroc ?", "Casablanca"],
    ["Quelle monnaie est utilisée au Maroc ?", "Dirham"],
    ["Quelle chaîne de montagnes traverse le Maroc ?", "Atlas"],
    ["Quelle est la langue officielle du Maroc ?", "Arabe"],
    ["Quelle ville marocaine est connue pour ses tanneries ?", "Fès"],
    ["Quel désert se trouve au sud du Maroc ?", "Sahara"]
];

// Fonction principale pour lancer le quiz
function lancerQuiz() {
    let score = 0;
    const nombreQuestions = QUESTIONS.length;

    alert("Bienvenue au quiz ! Vous aurez " + nombreQuestions + " questions à répondre.");

    // 2. Interroger l'utilisateur
    for (let i = 0; i < QUESTIONS.length; i++) {
        const question = QUESTIONS[i][0];
        const reponseCorrecte = QUESTIONS[i][1];
        
        // Demander la réponse à l'utilisateur
        const reponseUtilisateur = prompt(`Question ${i + 1}/${nombreQuestions}: ${question}`);
        
        // 3. Vérification des réponses
        if (reponseUtilisateur === null) {
            // L'utilisateur a cliqué sur Annuler
            if (confirm("Voulez-vous vraiment quitter le quiz ?")) {
                alert("Quiz annulé. Votre score actuel : " + score + "/" + i);
                return;
            } else {
                i--; // Revenir à la question précédente
                continue;
            }
        }
        
        // Comparaison des réponses (insensible à la casse et aux espaces)
        if (reponseUtilisateur.trim().toLowerCase() === reponseCorrecte.toLowerCase()) {
            alert("Réponse juste !");
            score++;
        } else {
            alert(`Réponse fausse ! La bonne réponse était : ${reponseCorrecte}`);
        }
    }

    // 4. Résultats de l'évaluation
    const pourcentage = Math.round((score / nombreQuestions) * 100);
    alert(`Quiz terminé !\n\nVous avez répondu correctement à ${score} questions sur ${nombreQuestions}.\nScore : ${pourcentage}%`);
}

// Lancer le quiz
lancerQuiz();