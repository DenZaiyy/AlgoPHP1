<?php
// Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).


$today = date('d.m.Y'); //format de date (jour.mois.année)
$bday = '26.12.1998';

$calculBday = date_diff(date_create($bday), date_create($today)); //on calcule la différence entre la date d'anniversaire saisie et la date d'aujourd'hui

echo 'Âge de la personne : ' . $calculBday->format('%y') . ' ans ' . $calculBday->format('%m') . ' mois ' . $calculBday->format('%d') . ' jours';
