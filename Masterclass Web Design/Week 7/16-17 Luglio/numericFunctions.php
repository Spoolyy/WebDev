<?php
$pizzoCalabro = [1, 3, 4, 5, 7, 9];
$valoreMinimo = min($pizzoCalabro);
echo "il tuo valore minimo e' " . $valoreMinimo;
echo '<br>';
$valoreMassimo = max($pizzoCalabro);
echo "il tuo valore massimo e' ". $valoreMassimo;
echo '<br>';
$floatingNum = 17.453;
$arrotondaDif = floor($floatingNum); //arrotonda per difetto
echo "il tuo numero arrotondato per difetto e' ".$arrotondaDif;
echo '<br>';
$arrotondaEcc = ceil($floatingNum); //arrotonda per eccesso
echo "il tuo numero arrotondato per eccesso e' ". $arrotondaEcc;
echo '<br>';
echo "il tuo numero arrotondato a decimali da te decisi e' ". round($floatingNum , 1); //arrotonda ad un numero di decimali da te deciso
echo '<br>';
echo "il tuo numero casuale e' ". rand(1,100); // genera un numero casuale in un intervallo da te deciso
echo '<br>';