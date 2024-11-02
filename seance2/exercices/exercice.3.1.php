<?php
/*
    Créez un trait Logger qui contient deux méthodes : logInfo($message) et
    logError($message). Utilisez ce trait dans deux classes FichierLogger et ConsoleLogger.
    Instructions :
    1. Définissez le trait Logger avec les méthodes logInfo($message) et
    logError($message).
    o logInfo() doit afficher le message avec le préfixe "INFO: ".
    o logError() doit afficher le message avec le préfixe "ERROR: ".
    2. Implémentez la classe FichierLogger qui utilise le trait Logger et ajoute une
    méthode enregistrerDansFichier($message) pour simuler l'enregistrement d'un
    message dans un fichier.
    3. Implémentez la classe ConsoleLogger qui utilise également le trait Logger et ajoute
    une méthode enregistrerDansConsole($message) pour simuler l'affichage d'un
    message dans la console.
    4. Créez des instances des deux classes et appelez les méthodes de logging
*/

trait Logger {
    public function logInfo($message) {
        echo "INFO: " . $message . "\n";
    }

    public function logError($message) {
        echo "ERROR: " . $message . "\n";
    }
}

class FichierLogger {
    use Logger;

    public function enregistrerDansFichier($message) {
        echo "Écriture dans le fichier: " . $message . "\n";
    }
}

class ConsoleLogger {
    use Logger;

    public function enregistrerDansConsole($message) {
        echo "Affichage console: " . $message . "\n";
    }
}

$fichierLogger = new FichierLogger();
$consoleLogger = new ConsoleLogger();

$fichierLogger->logInfo("Test message d'information fichier");
$fichierLogger->enregistrerDansFichier("Message spécifique fichier");
$fichierLogger->logError("Erreur d'ouverture du fichier");

echo "\n";

$consoleLogger->logInfo("Test message d'information console");
$consoleLogger->enregistrerDansConsole("Message spécifique console");
$consoleLogger->logError("Erreur d'affichage console");
