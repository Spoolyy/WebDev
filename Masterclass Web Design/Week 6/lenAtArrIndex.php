<?php
$frase ='Mi chiamo Alessio';
$arrFrase = explode(' ', $frase);
var_dump($arrFrase);
echo '</br>';
echo $frase . '</br>';
function thingidk($arrFrase, $frase) {
    for ($i = 0; $i < count($arrFrase); $i++) {
        if (strlen($arrFrase[$i]) > 4) {
            echo "la parola: " . $arrFrase[$i] . " all'indice " . $i . " e' lunga " . strlen($arrFrase[$i]) . " byte</br>";
        } 
    }
    echo "la tua frase e' di " . strlen($frase) . " byte";
}
thingidk($arrFrase, $frase);