<?php
/*
    Créez une classe `Animal` avec une méthode `parler()` qui affiche "L'animal parle". Ensuite,
    créez deux classes `Chien` et `Chat` qui héritent de `Animal` et redéfinissent la méthode
    `parler()` pour afficher "Le chien aboie" et "Le chat miaule", respectivement.
    Instructions :
    1. Implémentez la classe `Animal` avec la méthode `parler()`.
    2. Implémentez les classes `Chien` et `Chat` qui héritent de `Animal` et redéfinissent `parler()`.
    3. Créez des instances de `Chien` et `Chat`, et appelez `parler()` sur chaque instance.
*/

abstract class Animal {
    public function parler(): void
    {
        echo "L'animal parle\n";
    }
}

class Chien extends Animal {
    public function parler(): void
    {
        echo "Le chien aboie\n";
    }
}

class Chat extends Animal {
    public function parler(): void
    {
        echo "Le chat miaule\n";
    }
}

$chien = new Chien();
$chien->parler();

$chat = new Chat();
$chat->parler();
