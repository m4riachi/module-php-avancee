<?php
/*
    Créez une interface Calculable avec une méthode calculer($a, $b) qui retourne un
    nombre. Ensuite, créez deux classes Addition et Multiplication qui implémentent
    l'interface Calculable.
    Instructions :
    1. Définissez l'interface Calculable avec la méthode calculer($a, $b).
    2. Implémentez la classe Addition qui retourne la somme de $a et $b.
    3. Implémentez la classe Multiplication qui retourne le produit de $a et $b.
    4. Créez des instances de Addition et Multiplication, puis appelez calculer() sur
    chaque instance avec des valeurs d'exemple
*/

interface Calculable {
    public function calculer($a, $b): int;
}

class Addition implements Calculable {
    public function calculer($a, $b): int
    {
        return $a + $b;
    }
}

class Multiplication implements Calculable {
    public function calculer($a, $b): int
    {
        return $a * $b;
    }
}

$addition = new Addition();
print "Addition: " . $addition->calculer(5, 3) . "\n";

$multiplication = new Multiplication();
print "Multiplication: " . $multiplication->calculer(5, 3) . "\n";
