<?php
// A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
// (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
// respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)

$array = [
    "Mickaël" => "Salut",
    "Virgile" => "Hola",
    "Marie-Claire" => "Hello"
];

ksort($array); //trie le tableau grace a la clé (ex: mickael)

foreach ($array as $prenom => $langue) {
    echo $langue . " " . $prenom . "<br>";
}
