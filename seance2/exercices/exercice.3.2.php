<?php
/*
    Créez deux traits EmailSender et SmsSender, chacun contenant une méthode pour envoyer
    un message. Créez une classe Notification qui utilise les deux traits.
    Instructions :
    1. Définissez le trait EmailSender avec la méthode envoyerEmail($destinataire,
    $message) qui affiche "Email envoyé à $destinataire: $message".
    2. Définissez le trait SmsSender avec la méthode envoyerSms($numero, $message)
    qui affiche "SMS envoyé à $numero: $message".
    3. Implémentez la classe Notification qui utilise les traits EmailSender et SmsSender.
    4. Créez une instance de Notification et appelez envoyerEmail() et envoyerSms()
    avec des valeurs d'exemple.
*/

trait EmailSender {
    public function envoyerEmail($destinataire, $message): void
    {
        echo "Email envoyé à $destinataire: $message\n";
    }
}

trait SmsSender {
    public function envoyerSms($numero, $message): void
    {
        echo "SMS envoyé à $numero: $message\n";
    }
}

class Notification {
    use EmailSender, SmsSender;
}

$notification = new Notification();
$notification->envoyerEmail("email@gmail.com", "Bonjour");
$notification->envoyerSms("0601020304", "Salut");
