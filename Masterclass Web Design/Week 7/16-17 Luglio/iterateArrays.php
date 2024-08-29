<?php
$caltanisetta = [23, 43, 54, 23, 15];
echo "here's the number at your chosen index: " . $caltanisetta[2];
echo "<br>";
for ($i = 0; $i < count($caltanisetta); $i++) {
    echo 'index: ' . $i . ' ';
    echo 'number: ' . $caltanisetta[$i];
    echo "<br>";
}
echo "<br>";

$taranto = ["Nome" => "Alessio", "Cognome" => "Simeone", "Citta" => "Taranto"];

foreach ($taranto as $index => $value) {
    echo 'index: ' . $index . ' value: ' . $value . '<br>';
}

$bari = [["Nome" => "Alessio", "Cognome" => "Simeone"], ["Citta" => "Taranto", "Eta'" => "25"]];

foreach ($bari as $index => $batch) {
    foreach ($batch as $key => $value) {
        echo "index: " . $index . " value: " . $value . "<br>";
    }
    echo "<br>";
}

echo "<br>";

// esercizio 1
$colorArray = ["Blu", "Rosso", "Giallo", "Verde", "Viola"];
for ($i = 0; $i < count($colorArray); $i++) {
    echo "colore all'indice " . $i . ':';
    echo " " . $colorArray[$i] . "<br>";
    echo "<br>";
}

echo "<br>";
// esercizio 2
$assArray = ["titolo" => "fa caldo", "autore" => "Alessio Simeone", "anno" => "4572"];
foreach ($assArray as $element => $value) {
    echo $element . ": " . $value . "<br>";
}

echo "<br>";

$somma = 0;
for ($i = 1; $i < 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $somma += $i;
    }
}
echo "la somma dei numeri e: " . $somma;

echo "<br>";

$cacca = [10, 20, 30, -1, 40, 50];
$index = 0;
$sommaa = 0;
while ($index < count($cacca) && $cacca[$index] >= 0) {
    $sommaa += $cacca[$index];
    $index++;
}
echo "la somma fino al primo valore negativo e': " . $sommaa;

echo "<br>";

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($matrix as $key => $array) {
    foreach ($array as $subkey => $value) {
        // Incrementiamo ogni valore di 1 
        $matrix[$key][$subkey] = $value + 1;
    }
}
print_r($matrix);