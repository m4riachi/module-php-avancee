<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
Exercice 1 : Création de routes de base
1. Créer une route simple :
    o Créez une route qui retourne le texte "Bienvenue sur notre site!" lorsque vous visitez la racine de votre application (/).
2. Création de plusieurs pages statiques :
    o Créez trois routes distinctes pour afficher trois pages différentes :
        - /about : doit retourner le texte "À propos de nous".
        - /services : doit retourner le texte "Nos services".
        - /contact : doit retourner le texte "Contactez-nous".
*/

Route::get('/', function () {
    return "Bienvenue sur notre site!";
});

Route::get('/about', function () {
    return "À propos de nous";
});

Route::get('/services', function () {
    return "Nos services";
});

Route::get('/contact', function () {
    return "Contactez-nous";
});

/*
 Exercice 2 : Utilisation de paramètres de route
1. Route avec un paramètre dynamique :
    o Créez une route qui accepte un paramètre dynamique nom, et affiche un message personnalisé. Par exemple, visiter /hello/Alice devrait afficher "Bonjour, Alice!".
2. Route avec un paramètre optionnel :
    o Modifiez la route précédente pour que le nom soit optionnel. Si aucun nom n'est fourni, affichez "Bonjour, invité!" par défaut
 * */

Route::get('/hello/{name?}', function ($name = 'invité') {
    return "Bonjour, $name!";
});

/*
 Exercice 3 : Contrainte de paramètre avec des expressions régulières
1. Contraindre un paramètre à un format spécifique :
    o Créez une route qui prend un numéro de page dans l'URL (par exemple, /page/1) et affiche "Page numéro 1". Utilisez une expression régulière pour limiter le paramètre page aux valeurs de 1 à 5.
2. Tester les erreurs de route :
    o Tentez d'accéder à des pages en dehors de la plage définie, comme /page/10. Observez et notez le comportement de Laravel dans ce cas.
 * */

Route::get('/page/{page}', function ($page) {
    return "Page numéro $page";
})->where('page', '[1-5]');

/*
Exercice 4 : Utiliser les méthodes HTTP
1. Créer une route pour chaque méthode HTTP :
    o Créez les routes suivantes dans votre application :
        - GET /produit : Affiche "Liste des produits".
        - POST /produit : Affiche "Produit ajouté".
        - PUT /produit/{id} : Affiche "Produit {id} mis à jour".
        - DELETE /produit/{id} : Affiche "Produit {id} supprimé".
2. Exécuter des requêtes simulées :
    o Utilisez un outil comme Postman ou cURL pour simuler des requêtes POST, PUT, et DELETE et observez les réponses de chaque route.
*/

Route::get('/produit', function () {
    return "Liste des produits";
});

Route::post('/produit', function () {
    return "Produit ajouté";
});

Route::put('/produit/{id}', function ($id) {
    return "Produit $id mis à jour";
});

Route::delete('/produit/{id}', function ($id) {
    return "Produit $id supprimé";
});

/*
 Exercice 5 : Routes nommées et redirections
1. Créer une route nommée :
    o Créez une route nommée home qui retourne "Page d'accueil". Ensuite, dans une autre route, utilisez le helper route('home') pour rediriger vers la route home.
2. Générer une URL avec une route nommée :
    o Créez une route nommée profile qui prend un paramètre id. Utilisez le helper route pour générer l’URL de cette route pour un profil avec id = 5.
 * */

Route::get('/home', function () {
    return "Page d'accueil";
})->name('home');

Route::get('/redirect', function () {
    return redirect()->route('home');
});

Route::get('/profile/{id}', function ($id) {
    return "Profil $id";
})->name('profile');

/*
 Exercice 6 : Groupement de routes
1. Créer un groupe de routes pour une section du site :
    o Créez un groupe de routes avec le préfixe /admin. Par exemple, /admin/dashboard qui retourne "Tableau de bord admin" et /admin/settings qui retourne "Paramètres admin".
2. Appliquer un middleware :
    o (Optionnel) Si vous avez un middleware simple (comme auth), appliquez-le au groupe /admin et simulez les accès pour voir son fonctionnement.
 * */

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Tableau de bord admin";
    });

    Route::get('/settings', function () {
        return "Paramètres admin";
    });
});

/*
 Exercice 7 : Erreurs et gestion des routes non prévues
1. Gestion des erreurs de route :
    o Créez une route qui accepte des paramètres numériques et affiche "Vous avez accédé à la page {numéro}". Ajoutez une contrainte pour que seul un nombre de 1 à 5 soit accepté. Testez une URL comme /page/10 pour voir comment Laravel gère l'erreur.
2. Route de fallback :
    o Ajoutez une route de "fallback" qui affiche "Page non trouvée" si aucune autre route ne correspond à la requête.
 * */

Route::fallback(function () {
    return "Page non trouvée";
});

Route::get('/accueil/{message}', function ($message) {
    // return response("Bienvenue sur mon site", 200);
    return view('accueil', compact('message'));
})->name('accueil');

Route::resource('articles', ArticleController::class);
