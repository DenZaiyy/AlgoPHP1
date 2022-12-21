<?php
//A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
//« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.

$phrase = "Notre formation DL commence aujourd'hui";
echo "$phrase <br>";

$dayChange = str_replace("aujourd'hui", "demain", $phrase); //changement de mot dans la phrase $phrase (ancien par le nouveau)
echo $dayChange;
