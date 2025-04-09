// Création des éléments
const divElement = document.createElement('div');
const paragraph = document.createElement('p');

// Ajout du texte initial au paragraphe
paragraph.textContent = 'Ceci est un paragraphe';

// Ajout du paragraphe dans la div
divElement.appendChild(paragraph);

// Ajout de la div dans le body
document.body.appendChild(divElement);

// Modification du texte après création
paragraph.textContent = 'Le texte a été modifié';

// Modification du style CSS
paragraph.style.backgroundColor = 'lightblue';
paragraph.style.textAlign = 'center';

// Ajout de l'événement click
divElement.addEventListener('click', function() {
    paragraph.textContent = 'Un clic a été détecté';
});
