<?php
/*
    Créez deux traits TraitA et TraitB, chacun contenant une méthode afficher(). Dans une
    classe MonObjet, utilisez les deux traits et résolvez le conflit de méthodes.
    Instructions :
    1. Définissez le trait TraitA avec la méthode afficher() qui retourne "Affichage
    depuis TraitA".
    2. Définissez le trait TraitB avec la méthode afficher() qui retourne "Affichage
    depuis TraitB".
    3. Implémentez la classe MonObjet qui utilise les deux traits.
    4. Résolvez le conflit en redéfinissant la méthode afficher() dans MonObjet pour
    qu'elle affiche "Affichage personnalisé".
    5. Créez une instance de MonObjet et appelez la méthode afficher().
*/

trait TraitA {
    public function afficher(): string
    {
        return "Affichage depuis TraitA";
    }
}

trait TraitB {
    public function afficher(): string
    {
        return "Affichage depuis TraitB";
    }
}

class MonObjet {
    use TraitA, TraitB {
        TraitA::afficher as afficherA;
        TraitB::afficher as afficherB;
    }

    public function afficher(): string
    {
        return "Affichage personnalisé";
    }
}

$objet = new MonObjet();
print $objet->afficherA() . "\n";
print $objet->afficherB() . "\n";
print $objet->afficher() . "\n";
