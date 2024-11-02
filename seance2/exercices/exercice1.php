<?php
/*
    Créez une classe `Personne` avec des attributs `nom` et `âge`. Ensuite, créez une classe
    `Étudiant` qui hérite de `Personne` et ajoute un attribut `matricule`. Implémentez un
    constructeur pour chaque classe.
    Instructions :
    1. Implémentez la classe `Personne` avec les attributs et le constructeur.
    2. Implémentez la classe `Étudiant` qui hérite de `Personne`, avec son propre constructeur et
    l'attribut `matricule`.
    3. Créez une instance de `Étudiant` et affichez ses attributs.
*/

class Personne {
    public string $nom;
    public int $age;

    public function __construct(string $nom, int $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
}

class Etudiant extends Personne {
    public string $matricule;

    public function __construct(string $nom, int $age, string $matricule)
    {
        parent::__construct($nom, $age);
        $this->matricule = $matricule;
    }
}

$etudiant = new Etudiant("John Doe", 25, "123456");
print "Nom: $etudiant->nom, Age: $etudiant->age, Matricule: $etudiant->matricule\n";
