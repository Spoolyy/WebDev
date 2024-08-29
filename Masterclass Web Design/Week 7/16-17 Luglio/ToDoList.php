<?php
$toDoList = ["Fare la spesa", "Portare il cane a cacare", "Comprarsi una Porsche"];
function todolist()
{
    global $toDoList;
    foreach ($toDoList as $toDo) {
        echo "*" . $toDo . "\n";
    }
}

function addEntry()
{
    global $toDoList;
    $newEntry = fgets(STDIN);
    $toDoList[] = $newEntry;
}

function removeEntry()
{
    global $toDoList;
    echo "seleziona l'indice della entry che vuoi rimuovere:";
    $removeEntry = (int)fgets(STDIN);
    if (isset($toDoList[$removeEntry])) {
        unset($toDoList[$removeEntry]);
    } else {
        echo "Nessuna entry presente a quell'indice";
    }
}

function menuOptions()
{
    do {
        echo "Ciao, ecco la tua lista, cosa vuoi fare? \n";
        todolist();
        echo "\n0-Visualizza Lista";
        echo "\n1-Aggiungi elemento";
        echo "\n2-Rimuovi elemento";
        echo "\n\n";
        $input = fgets(STDIN);
        switch ($input) {
            case "0":
                todolist();
                break;
            case "1":
                addEntry();
                break;
            case "2":
                removeEntry();
                break;
            default:
                echo "Opzione non valida";
                break;
        }
    } while ($input != 3);
}

menuOptions();


// function aggiungielemento ($toDoList){
//     foreach ($toDoList as $toDo) {

//     }
// }

// Esercizio PHP per Junior: Lista di Cose da Fare (To-Do List)
// Obiettivo:

// Creare un semplice script PHP per gestire una lista di cose da fare (to-do list). L'applicazione permetterà di aggiungere e visualizzare gli elementi della lista. I dati saranno mantenuti in una variabile PHP senza l'uso di file, database MySQL, sessioni o HTML.
// Requisiti:

//     Creare uno script PHP per gestire la logica.
//     Utilizzare la riga di comando (CLI) per interagire con lo script.

// Istruzioni:

//     Crea un file chiamato todo.php.
//     Implementa le funzioni per aggiungere nuovi elementi alla lista.
//     Implementa le funzioni per visualizzare gli elementi della lista.
//     Implementa le funzioni per rimuovere gli elementi dalla lista.
//     Utilizza un array PHP per mantenere la lista di cose da fare.