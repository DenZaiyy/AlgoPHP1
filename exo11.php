<?php
// Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
// tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
// d’afficher le nombre de marques de voitures présentes dans le tableau.


$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

echo 'Il y a ' . count($marques) . ' marques de voitures dans le tableau :'; //count = nombre d'objet dans le tableau

echo "<ul>";
foreach ($marques as $marque) {
    echo "<li>$marque</li>";
}
echo "</ul>";
