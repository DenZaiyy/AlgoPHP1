<?php
//Ecrire un algorithme permettant de savoir si une phrase est palindrome.

function checkPalindrome($string) //fonction pour vérifier si la phrase type 'string' est palindrome ou non
{
    $string = str_replace(' ', '', $string); //supprime les espaces de la phrase
    $string = strtolower($string); //met tout en minuscule

    $reverse = strrev($string); //inverse les caractères de la phrase

    if ($string == $reverse) { //vérifie si l'inversion des caractère correspond a sa valeur initale
        return "est palindrome"; //si oui retourne le résultat palindrome
    } else {
        return "n'est pas palindrome"; //autrement la phrase n'est pas palindrome
    }
}

$phrase = "Engage le jeu que je le gagne";

echo "La phrase « $phrase » " . checkPalindrome($phrase); //renvoie le résultat
