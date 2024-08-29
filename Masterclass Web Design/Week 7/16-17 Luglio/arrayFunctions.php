<?php
$arrayNumerico = [13,23,43,52,12];
echo count($arrayNumerico);
echo "<br>";

$arrayTesto = ["Gianni", "Paolo", "Michele", "Francesco", "Mario"];
$arrayTestoTagliato = array_slice($arrayTesto,0,3);
var_dump($arrayTestoTagliato);
echo "<br>";

$persona = in_array("Gianni", $arrayTesto);
var_dump($persona);
echo "<br>";

sort($arrayNumerico);
//rsort($arrayNumerico); reverse sort order
var_dump($arrayNumerico);
echo "<br>";

$countries = [
    "en" => "Inghilterra", 
    "de" => "Germania", 
    "es" => "Spagna", 
    "it" => "Italia", 
    "fr" => "Francia"
];
asort($countries); // ascendente per associativi per valore
//arsort($countries); discendente per associativi per valore
//ksort($countries); ascendente per associativi per chiave
//krsort($countries); discendente per associativi per chiave
var_dump($countries);
echo "<br>";

$array1 = ["Uno", "Due", "Tre"];
$array2 = ["Quattro", "Cinque", "Sei"];
$array3 = ["Sette", "Otto", "Nove"];
$onebigboy = array_merge($array1, $array2, $array3);
var_dump($onebigboy);
echo "<br>";

var_dump(array_keys($countries));
echo "<br>";
var_dump(array_values($countries));
echo "<br>";

// esercizio 1
$arrayesercizio = [1,2,3,4,5,6];
$totale = 0;
for ($i = 0; $i < count($arrayesercizio); $i++) {
    $totale += $arrayesercizio[$i];
}
echo $totale;
echo "<br>";

// esercizio 2
for ($i = 0; $i < count($arrayesercizio); $i++) {
    $arrayesercizio[$i] *= 2;
}
var_dump($arrayesercizio);
echo "<br>";

// esercizio 3
$mdArray = [
    ["Nome"=>"Giovanni", "Voto" => "10"],
    ["Nome"=>"Marco", "Voto" => "8"],
    ["Nome"=>"Piero", "Voto" => "2"],
];
foreach ($mdArray as $key => $value) {
    foreach ($value as $key2 => $value2) {
        echo $key2 .": ". $value2 ."<br>";
    }
}
echo "<br>";

// esercizio 4
$numeri = [1, 2, 3, 4, 5, 6];
foreach($numeri as $indice){
  if($indice % 2 == 0){
    echo $indice;
  }
}
echo "<br>";

// esercizio 5
$prodotti = [
    "Laptop" => 1200,
    "Telefono" => 600,
    "Tablet" => 400
];
$totalPrice = 0;
foreach ($prodotti as $item => $price) {
    $totalPrice += $price;
}
echo $totalPrice;
echo "<br>";

// esercizio 6
$studenti = [
    "Mario" => ["matematica" => 90, "inglese" => 85],
    "Luigi" => ["matematica" => 78, "inglese" => 88],
    "Giulia" => ["matematica" => 85, "inglese" => 82]
];
foreach ($studenti as $studente => $materiaevoto) {
    foreach ($materiaevoto as $materia => $voto) {
        echo $studente . " " . $materia ." ". $voto ."<br>";
    }
}