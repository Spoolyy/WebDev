<?php
// Esercizio: Sistema di Pagamento Online

// In questo esercizio, creerai un sistema di pagamento online utilizzando le classi astratte in PHP. Il sistema supporterà diversi metodi di pagamento, come il pagamento con carta di credito e il pagamento tramite PayPal.
// Obiettivo

//     Definire una classe astratta PaymentMethod che includa metodi astratti e concreti.
//     Implementare classi derivate CreditCardPayment e PaypalPayment che estendano PaymentMethod.
//     Utilizzare le classi per simulare il processo di pagamento.

// Passaggi

//     Definire la Classe Astratta PaymentMethod
//         La classe deve avere una proprietà $amount per l'importo del pagamento.
//         Deve includere un costruttore che accetta l'importo come parametro.
//         Deve avere un metodo concreto paymentSuccessful che stampa un messaggio di pagamento riuscito.
//         Deve avere un metodo astratto processPayment che le classi derivate devono implementare.

//     Implementare la Classe CreditCardPayment
//         Questa classe deve estendere PaymentMethod.
//         Deve avere proprietà aggiuntive $cardNumber e $cardHolderName.
//         Deve avere un costruttore che accetta l'importo, il numero della carta e il nome del titolare della carta come parametri.
//         Deve implementare il metodo processPayment per simulare il pagamento con carta di credito e chiamare paymentSuccessful.

//     Implementare la Classe PaypalPayment
//         Questa classe deve estendere PaymentMethod.
//         Deve avere una proprietà aggiuntiva $email.
//         Deve avere un costruttore che accetta l'importo e l'email come parametri.
//         Deve implementare il metodo processPayment per simulare il pagamento tramite PayPal e chiamare paymentSuccessful.

//     Utilizzare le Classi per Processare i Pagamenti
//         Crea un'istanza di CreditCardPayment e un'istanza di PaypalPayment.
//         Chiama il metodo processPayment su ciascuna istanza per simulare il pagamento.

abstract class PaymentMethod {
    public float $amount;
    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function paymentSuccessful() {
        echo "The ".$this->amount." euro payment went through correctly. <br>";
    }

    abstract public function processPayment();
}

class CreditCardPayment extends PaymentMethod {
    public int $cardNumber;
    public string $cardHolderName;
    public function __construct(float $amount, int $cardNumber, string $cardHolderName) {
        $this->cardNumber = $cardNumber;
        $this->cardHolderName = $cardHolderName;
        parent::__construct($amount);
    }
    public function processPayment() {
        echo "Your payment is being processed, hold on tight...<br>";
        $this->paymentSuccessful();
    }
}

class PayPalPayment extends PaymentMethod {
    public string $cardHolderName;
    public string $email;
    public function __construct(float $amount, string $cardHolderName, string $email) {
        $this->cardHolderName = $cardHolderName;
        $this->email = $email;
        parent::__construct($amount);
    }
    public function processPayment() {
        echo "Paypal is processing your payment, hold on tight...<br>";
        $this->paymentSuccessful();
    }
}

$pagamento1 = new CreditCardPayment(120.50,1234,"Simeone Alessio",);
echo $pagamento1->processPayment();
echo "<br>";
$pagamento2 = new PayPalPayment(145.76,"Simeone Alessio","alessio@mail.com");
echo $pagamento2->processPayment();