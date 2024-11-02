<?php
/*
    Bien que PHP ne supporte pas l'héritage multiple, vous pouvez utiliser des interfaces. Créez
    une interface `Identifiable` avec une méthode `getId()`. Créez une classe `Produit` qui a un
    attribut `id`. Ensuite, créez une classe `Article` qui hérite de `Produit` et implémente
    `Identifiable`.
    Instructions :
    1. Créez l'interface `Identifiable` avec la méthode `getId()`.
    2. Implémentez la classe `Produit` avec l'attribut `id`.
    3. Implémentez la classe `Article` qui hérite de `Produit` et redéfinit `getId()` pour retourner
    l'id du produit.
    4. Créez une instance de `Article` et appelez `getId()`.
*/

interface Identifiable {
    public function getId(): int;
}

class Produit {
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}

class Article extends Produit implements Identifiable {
    public function getId(): int
    {
        return $this->id;
    }
}

$article = new Article(123);
print "ID: " . $article->getId() . "\n";
