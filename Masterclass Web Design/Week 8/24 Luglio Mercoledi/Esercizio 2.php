<?php
interface Notifier {
    public function sendNotification(string $message);
}

class EmailNotifier implements Notifier {
    public function sendNotification(string $message) {
        echo "Notifica inviata via mail. <br>Il contenuto del messaggio e': ".$message;
    }
}

class SMSNotifier implements Notifier {
    public function sendNotification(string $message) {
        echo "Notifica inviata via SMS. <br>Il contenuto del messaggio e': ".$message;
    }
}

$emailNotif = new EmailNotifier();
$smsNotif = new SMSNotifier();
echo $emailNotif->sendNotification("messaggioemail");
echo "<br>";
echo $smsNotif->sendNotification("messaggiosms");

// Esercizio: Sistema di Notifica

// In questo esercizio, implementerai un sistema di notifica utilizzando le interfacce in PHP. Creerai un'interfaccia Notifier che definirà un metodo sendNotification. 
// Implementerai due classi EmailNotifier e SMSNotifier che implementano l'interfaccia Notifier e inviano notifiche via email e SMS, rispettivamente.

// Obiettivo

//     Definire un'interfaccia Notifier con un metodo sendNotification.
//     Implementare le classi EmailNotifier e SMSNotifier che implementino l'interfaccia Notifier.
//     Utilizzare le classi per inviare notifiche.

// Passaggi

//     Definire l'Interfaccia Notifier
//         L'interfaccia deve dichiarare il metodo sendNotification che accetta un parametro $message.

//     Implementare la Classe EmailNotifier
//         Questa classe deve implementare l'interfaccia Notifier.
//         Deve implementare il metodo sendNotification per inviare una notifica via email.

//     Implementare la Classe SMSNotifier
//         Questa classe deve implementare l'interfaccia Notifier.
//         Deve implementare il metodo sendNotification per inviare una notifica via SMS.

//     Utilizzare le Classi per Inviare Notifiche
//         Creare istanze di EmailNotifier e SMSNotifier.
//         Chiamare il metodo sendNotification su ciascuna istanza per inviare notifiche.