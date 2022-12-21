<?php
// Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
// coefficient). Elle devra être affichée avec 2 décimales.

$notes = ["10", "12", "8", "19", "3", "16", "11", "13", "9"];
$moyenne = array_sum($notes) / count($notes); //additionne toutes les notes puis on divise par le nombre de notes du tableau

echo "Les notes obtenues par l'élève sont : " . implode(' ', $notes) .  "<br>"; //implode, c'est rajouter un caractères entre chaque élement du tableau $notes
echo "Sa moyenne générale est donc de : " . round($moyenne, 2); //arrondie la note de la moyenne a 2 chiffre après la virgule
