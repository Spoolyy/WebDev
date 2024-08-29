<?php
$numeroUno = 25;
$numeroDue = 25;
$somma = $numeroUno + $numeroDue;
echo $somma . '<br>';
if ($numeroUno > $numeroDue) {
    echo "Il numero " . $numeroUno . " e' piu grande.";
} else if ($numeroUno < $numeroDue) {
    echo "il numero " . $numeroDue . " e' piu grande.";
} else {
    echo "i numeri sono uguali.";
}
echo "<br>";

$colore = "Rosso";
switch ($colore) {
    case $colore == "Verde":
        echo "il colore e' Verde";
        break;
    case $colore == "Rosso":
        echo "il colore e' Rosso";
        break;
}

echo "<br>";
echo "<br>";

$variabile = 13;
echo $variabile . '<br>';
switch ($variabile) {
    case $variabile > 0:
        echo "La tua variabile e' maggiore di 0";
        break;
    case $variabile < 0:
        echo "La tua variabile e' minore di 0";
        break;
    case $variabile == 0:
        echo "La tua variabile e' uguale a 0";
}

echo "<br>";
echo "<br>";

$eta = 24;
$maggioreeta = 18;
$patente = true;

// if ($eta >= $maggioreeta && $patente == true) {
//     echo "La persona in questione e' maggiorenne e ha la patente";
// } else if ($eta >= $maggioreeta && $patente == false) {
//     echo "La persona in questione e' maggiorenne ma non ha la patente";
// } else if ($eta < $maggioreeta) {
//     echo "La persona in questione e' minorenne";
// }

// echo "<br>";

if ($eta >= $maggioreeta) {
    if ($patente == true) {
        echo "la persona in questione e' maggiorenne e ha la patente";
    } else {
        echo "la persona in questione e' maggiorenne ma non ha la patente";
    }
} else {
    echo "La persona in questione e' minorenne";
}

echo "<br>";
echo "<br>";

$valuta = 'Euro';
$tassoRicambioEURUSD =  1.08;
$tassoRicambioGBPUSD = 1.27;

switch ($valuta) {
    case "Euro":
        echo "Il tasso di ricambio dell'euro col dollaro e' " . $tassoRicambioEURUSD;
        break;
    case "Sterlina":
        echo "Il tasso di ricambio della sterlina con il dollaro e' " . $tassoRicambioGBPUSD;
        break;
    default:
        echo "Nessun tasso di ricambio disponibile per la valuta " . '<b>' . $valuta . '</b>';
}

echo "<br>";
echo "<br>";

$uno = 6;
$due = 7;
if ($uno > $due) {
    echo "Maggiore!";
} else {
    echo "Minore!";
}

echo "<br>";
($uno > $due) ? print("Maggiore") : print("Minore"); // Operatore ternario, puoi anche solo dichiarare il risultato e memorizzarlo all'interno di una variabile

echo "<br>";
echo "<br>";

// $primonumero = 0;
// while ($primonumero <= 10) {
//     echo $primonumero . "<br>";
//     $primonumero++;
// }

// echo "<br>";
// echo "<br>";

// $primonumero = 0;
// while ($primonumero <= 20) {
//     echo $primonumero . "<br>";
//     $primonumero += 2;
// }

// echo "<br>";

// //trasfromato in un ciclo for
// $primoNumeroFor = 0;
// for ($i = 0; $i <= 20; $i+=2) {
//     echo "-" . $i . "<br>";
// }

// echo "<br>";

$filippo = 0;
do {
    echo $filippo . "<br>";
    $filippo += 2;
} while ($filippo <= 20);
