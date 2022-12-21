<?php
// Créer une classe Personne (nom, prénom et date de naissance).
// Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
// $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
// $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

class Personne
{
    private $_nom;
    private $_prenom;
    private $_dateOfBirth;

    //Le __construct() sert à initialiser l'objet à créer, en lui assigant les attributs qu'ils contient
    public function __construct($nom, $prenom, $dateOfBirth)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateOfBirth = $dateOfBirth;
    }

    public function setNom($nom) //la fonction set permet de définir une nouvelle valeur à la propriété $nom
    {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->_nom = $prenom;
    }

    public function setDOB($dob)
    {
        $this->_nom = $dob;
    }

    public function getNom() //la fonction get permet de récuperer la dernière valeur saison à la propriété $nom
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDOB()
    {
        return $this->_dateOfBirth;
    }

    public function getAge()
    {
        $dob = new Datetime($this->_dateOfBirth);
        $today = new DateTime();
        $diff = $dob->diff($today)->format("%y");
        return $diff;
    }

    //La fonction __toString() va être appeler quand on va traiter un objet comme une chaîne de caractère (echo)
    public function __toString()
    {
        return $this->getPrenom() . ' ' . $this->getNom() . " à " . $this->getAge() . " ans<br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1;
echo $p2;
