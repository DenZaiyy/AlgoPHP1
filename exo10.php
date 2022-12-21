<?php
// A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
// affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
// 1 €.

$montant_du = 152;
$montant_verser = 200;
$montant_a_rendre = $montant_verser - $montant_du;
$montant_a_rendre1 = $montant_verser - $montant_du; //montant afficher sur le html (pour garder la valeur à rendre sans calcule)

$billet_10 = 0;
$billet_5 = 0;
$piece_2 = 0;
$piece_1 = 0;

while ($montant_a_rendre >= 10) {
    $montant_a_rendre = $montant_a_rendre - 10;
    $billet_10++;
}
while ($montant_a_rendre >= 5) {
    $montant_a_rendre = $montant_a_rendre - 5;
    $billet_5++;
}
while ($montant_a_rendre >= 2) {
    $montant_a_rendre = $montant_a_rendre - 2;
    $piece_2++;
}
$piece_1 = $montant_a_rendre;

echo "Montant à payer : $montant_du €<br>";
echo "Montant versée : $montant_verser €<br>";
echo "Reste à payer : $montant_a_rendre1 €<br>";
echo "***************************************************<br>";
echo "Rendue de monnaie : <br>";
echo "<strong>$billet_10</strong> billets de 10 - <strong>$billet_5</strong> billet de 5 - <strong>$piece_2</strong> pièce de 2 - <strong>$piece_1</strong> pièce de 1";
