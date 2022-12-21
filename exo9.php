<?php
// Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
// Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
// plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).


function checkImposabilityForPerson($age, $sexe)
{
    if ($sexe == "F") {
        if ($age >= 18 && $age <= 35) {
            echo "Age : $age <br>Sexe : $sexe<br>La personne est imposable";
        } else {
            echo "Age : $age <br>Sexe : $sexe<br>La personne est non imposable";
        }
    } else if ($sexe == "M") {
        if ($age >= 20) {
            echo "Age : $age <br>Sexe : $sexe<br>La personne est imposable";
        } else {
            echo "Age : $age <br>Sexe : $sexe<br>La personne est non imposable";
        }
    }
}
echo checkImposabilityForPerson(40, "M");
