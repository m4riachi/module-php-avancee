<?php
/*
    Créez une interface Renderable avec une méthode render(). Créez deux classes Image et
    Texte qui implémentent l'interface Renderable et utilisent une méthode magique
    __toString() pour retourner une représentation de l'objet.
    Instructions :
    1. Définissez l'interface Renderable avec la méthode render().
    2. Implémentez la classe Image qui redéfinit render() pour retourner une chaîne
    indiquant "Rendu d'une image".
    3. Implémentez la classe Texte qui redéfinit render() pour retourner une chaîne
    indiquant "Rendu d'un texte".
    4. Ajoutez la méthode magique __toString() dans chaque classe pour retourner une
    description de l'objet.
    5. Créez des instances de Image et Texte, et affichez les objets en utilisant echo pour
    vérifier la méthode magique.
*/

interface Renderable {
    public function render(): string;
}

class Image implements Renderable {
    public function render(): string
    {
        return "Rendu d'une image";
    }

    public function __toString(): string
    {
        return $this->render();
    }
}

class Texte implements Renderable {
    public function render(): string
    {
        return "Rendu d'un texte";
    }

    public function __toString(): string
    {
        return $this->render();
    }
}

$image = new Image();
print $image . "\n";

$texte = new Texte();
print $texte . "\n";
