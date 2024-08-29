<?php
$prodotti = array(
    "Laptop" => 1200,
    "Telefono" => 600,
    "Tablet" => 400,
    "Monitor" => 200,
    "Stampante" => 150
);

function output($prodotti) {
    foreach ($prodotti as $prodotto => $prezzo) {
        echo"Prodotto: ". $prodotto ." Prezzo: ". $prezzo . "<br>";
    }
}
function ordinaPerPrezzoAscendente(&$prodotti) {
    asort($prodotti);
    output($prodotti);
}
ordinaPerPrezzoAscendente($prodotti);
echo "<br>";
function ordinaPerNomeDiscendente(&$prodotti) {
    krsort($prodotti);
    output($prodotti);
}
ordinaPerNomeDiscendente($prodotti);