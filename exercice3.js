
const QUESTIONS = [
    ["Quelle est la capitale de Maroc ?", "Rabat"],
    ["Quelle est la plus grande ville du Maroc ?", "Casablanca"],
    ["Quelle monnaie est utilisée au Maroc ?", "Dirham"],
    ["Quelle chaîne de montagnes traverse le Maroc ?", "Atlas"],
    ["Quelle est la langue officielle du Maroc ?", "Arabe"],
    ["Quelle ville marocaine est connue pour ses tanneries ?", "Fès"],
    ["Quel désert se trouve au sud du Maroc ?", "Sahara"]
];
  function lancerQuiz() {
    let score = 0;

    for (let i = 0; i< QUESTIONS.length; i++) {
      const questionTexte = QUESTIONS[i][0];
      const Reponse = QUESTIONS[i][1];
  
      const reponseUtilisateur = prompt(questionTexte);
  
      if (reponseUtilisateur !== null && reponseUtilisateur.trim().toLowerCase() === Reponse.toLowerCase()) {
        alert("Réponse juste !");
        score++;
      } else {
        alert("Réponse fausse !");
      }
    }
    alert("Vous avez répondu correctement à " + score + " question(s) sur " + QUESTIONS.length + ".");
  }
  


  
   
