<?php
// Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :

$age = 4;
$result = "";

if ($age >= 12) {
    $result = "Cadet";
} else if ($age >= 10) {
    $result = "Minime";
} else if ($age >= 8) {
    $result = "Pupille";
} else if ($age >= 6) {
    $result = "Poussin";
} else {
    $result = "aucune catégorie";
}

echo "L'enfant qui a $age ans appartient à la catégorie « $result »";
