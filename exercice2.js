// Générer un nombre aléatoire entre 1 et 10
const nombreChoiser = Math.floor(Math.random() * 10) + 1;
let itération = 0;
let trouve = false;

alert("Devinez le nombre entre 1 et 10 !");

while (!trouve) {
    // Demander à l'utilisateur de deviner
    const proposition = prompt("Entrez votre proposition (entre 1 et 10):");
    
    // Vérifier si l'utilisateur a annulé
    if (proposition === null) {
        alert("Vous avez annulé le jeu. Le nombre était " + nombreChoiser);
        break;
    }
    
    // Convertir en nombre
    const nombrePropose = parseInt(proposition);
    
    // Vérifier si c'est un nombre valide
    if (isNaN(nombrePropose)) {
        alert("Veuillez entrer un nombre valide !");
        continue;
    }
    
    if (nombrePropose < 1 || nombrePropose > 10) {
        alert("Le nombre doit être entre 1 et 10 !");
        continue;
    }
    
    // Incrémenter le compteur de tentatives
    itération++;
    
    // Vérifier la proposition
    if (nombrePropose === nombreChoiser) {
        trouve = true;
        alert("Bravo ! Vous avez trouvé le nombre " + nombreChoiser + " en " + itération+ " tentative(s).");
    } else if (nombrePropose < nombreChoiser) {
        alert("Le nombre à deviner est plus grand !");
    } else {
        alert("Le nombre à deviner est plus petit !");
    }
}