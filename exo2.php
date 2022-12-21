<?php
// A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
// contenus dans celle-ci.

$phrase = "Notre formation DL commence aujourd'hui";
$nb_Mot = str_word_count($phrase); //nb de mots


echo "La phrase « $phrase » contient $nb_Mot mots.";
