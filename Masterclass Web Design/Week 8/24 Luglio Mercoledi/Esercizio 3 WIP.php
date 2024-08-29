<?php

interface Persistable
{
    public function savefile($filename);
    public function loadfile($filename);
}

class Restaurant implements Persistable {
    public $filename = "gestioneRistorante.txt";
    public function savefile($filename) {
        if (false === file_exists($filename)) {
            file_put_contents($filename, "");
        }
    }

    public function loadfile($filename) {
        $readfile = file_get_contents($filename);
        echo $readfile;
    }
}

class Dish extends Restaurant {
    public string $name = "";
    public float $price = 0;
    public int $dishID = 0;
    public function __construct(string $name, float $price, int $dishID) {
        $this->name = $name;
        $this->price = $price;
        $this->dishID = $dishID;
    }
}

class Order extends Restaurant {
    public int $orderID = 0;
    public int $clientID = 0;
    public array $clientOrder = [];
    public function __construct(int $orderID, int $clientID, array $clientOrder) {
        $this->orderID = $orderID;
        $this->clientID = $clientID;
        $this->clientOrder = $clientOrder;
    }
}

// https://www.php.net/manual/it/function.serialize.php

// https://www.php.net/manual/it/function.unserialize.php

// Esercizio: Sistema di Gestione degli Ordini di un Ristorante
// Descrizione

// Implementa un sistema di gestione degli ordini per un ristorante utilizzando PHP. Il sistema dovrà gestire i piatti del menu, gli ordini dei clienti, e permettere di salvare e caricare i dati da file.
// Requisiti

//     Classi:
//         Dish: rappresenta un piatto con attributi come nome, prezzo e codice piatto.
//         Order: rappresenta un ordine con attributi come ID ordine, ID cliente e lista di piatti ordinati.
//         Restaurant: gestisce l'elenco dei piatti e degli ordini.

//     Interfacce:
//         Persistable: definisce i metodi per salvare e caricare i dati da un file.

//     Ereditarietà:
//         Utilizza l'ereditarietà per estendere le funzionalità delle classi dove necessario.

//     Gestione dei File:
//         Implementa il salvataggio e il caricamento dei dati del ristorante in un file.