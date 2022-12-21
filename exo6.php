<?php
// Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
// d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

function factureCalcule($nb_articles, $price, $tva)
{
    echo "Prix unitaire de l’article : " . $price . " €<br>";
    echo "Quantité : " . $nb_articles . "<br>";
    echo "Taux TVA : " . $tva . "<br>";

    if ($nb_articles >= 1) {
        $calc_price = $nb_articles * $price;
        $calc_tva = $calc_price / 100 * 20;
        $final_price = $calc_price + $calc_tva;
        echo "Le montant de la facture à régler est de : " . $final_price . " €";
    } else {
        echo "Aucun article existant";
    }
}

echo factureCalcule("5", "9.99", "0.2");
