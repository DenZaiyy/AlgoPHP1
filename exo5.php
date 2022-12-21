<?php
// Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
// Attention, la valeur générée devra être arrondie à 2 décimales.

$francs = 100;
$toEUR = $francs * 0.15244902; //conversion francs to eur

$total = round($toEUR, 2); //arrondie la décimal a 2 chiffres après la virgule

echo "Montant en francs : $francs<br>";
echo "$francs francs = $total €";
