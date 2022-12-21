<?php
// Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
// forme :

function tableOfMultiplicationFor($nb_table, $nb_multiplication)
{
    echo "Table de $nb_table :<br>";
    for ($i = 1; $i <= $nb_multiplication; $i++) {
        $result = $i * $nb_table;
        echo "$i x $nb_table = $result<br>";
    }
}

function tableOfMultiplicationWhile($nb_table, $nb_multiplication)
{
    echo "Table de $nb_table :<br>";
    $x = 1;
    while ($x <= $nb_multiplication) {
        $result = $x * $nb_table;
        echo "$x x $nb_table = $result<br>";
        $x++;
    }
}

tableOfMultiplicationFor(8, 10);
tableOfMultiplicationWhile(7, 10);
