<?php
/*
    Créez une interface Connectable avec une méthode connecter(). Ensuite, créez deux
    classes BaseDeDonnees et Api qui implémentent l'interface Connectable.
    Instructions :
    1. Définissez l'interface Connectable avec la méthode connecter().
    2. Implémentez la classe BaseDeDonnees qui redéfinit connecter() pour afficher
    "Connexion à la base de données".
    3. Implémentez la classe Api qui redéfinit connecter() pour afficher "Connexion à
    l'API".
    4. Créez un tableau d'instances de Connectable contenant des objets de type
    BaseDeDonnees et Api, puis parcourez ce tableau pour appeler connecter() sur
    chaque objet.
*/

interface Connectable {
    public function connecter(): void;
}

class BaseDeDonnees implements Connectable {
    public function connecter(): void
    {
        echo "Connexion à la base de données\n";
    }
}

class Api implements Connectable {
    public function connecter(): void
    {
        echo "Connexion à l'API\n";
    }
}

$connectables = [
    new BaseDeDonnees(),
    new Api()
];
foreach ($connectables as $connectable) {
    $connectable->connecter();
}
