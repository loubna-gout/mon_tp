
let nombre1 = parseFloat(prompt("Veuillez entrer le premier nombre :"));
let nombre2 = parseFloat(prompt("Veuillez entrer le deuxième nombre :"));

let somme = nombre1 + nombre2;
let difference = nombre1 - nombre2;
let produit = nombre1 * nombre2;

 let quotient = nombre2 !== 0 ? nombre1 / nombre2 : "indéfini (division par zéro)";

   
console.log(`Résultats pour ${nombre1} et ${nombre2}:`);
console.log(`- Somme: ${somme}`);
console.log(`- Différence: ${difference}`);
console.log(`- Produit: ${produit}`);
console.log(`- Quotient: ${quotient}`);
