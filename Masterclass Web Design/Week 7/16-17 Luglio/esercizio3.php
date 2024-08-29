<?php

use LDAP\Result;

$arraymax = [5, 2, 9, 1, 7, 6];
function contaOccorrenze($arraymax) {
    $massimo = PHP_INT_MIN;
    $secondoMassimo = PHP_INT_MIN;
    foreach ($arraymax as $value) {
        if ($value > $massimo) {
            $secondoMassimo = $massimo;
            $massimo = $value;
        } else if ($value > $secondoMassimo && $value < $massimo) {
            $secondoMassimo = $value;
        }
    }
    return $secondoMassimo;
}
echo contaOccorrenze($arraymax);
echo "<br>";

$multiplyres = [1,2,3,4];

function prodottoArray ($multiplyres) {
    $mult = 1;
    foreach ($multiplyres as $value) {
        $mult *= $value;
    }
    echo $mult;
}

prodottoArray($multiplyres);
echo "<br>";

function somma(...$numeri){
    $somma = 0;
    foreach ($numeri as $value) {
        $somma += $value;
    }
    echo $somma;
}
somma(1,2,3,4,5);
echo "<br>";

function concatenaStringhe(...$stringarray) {
    $stringone = "";
    foreach ($stringarray as $stringa) {
        $stringone .=  " " . $stringa;
    }
    echo $stringone;
}
concatenaStringhe("PHP", "e'", "bello");
echo "<br>";

$anonymFunc = function ($a, $b) {
    return $a + $b;
};
echo $anonymFunc(3,4);
echo "<br>";

$numUno = 5;
$numDue = 7;
$sumsum = function () use( $numUno, $numDue ) {
    return $numUno + $numDue;
};
echo $sumsum($numUno, $numDue);
echo "<br>";

$filterDynamicArray = [];
$isPari = function($n) {
    return $n % 2 == 0;
};
function filtraArrayDinamico( $filterDynamicArray, $isPari ) {
    $filteredarray = [];
    foreach ($filterDynamicArray as $value) {
        if ($isPari($value)) {
            $filteredarray[] = $value;
        }
    }
    return $filteredarray;
}
var_dump(filtraArrayDinamico([1,2,3,4,5], $isPari));
echo "<br>";

$multiply = function($n) {
    return $n * 2;
};
function multiplyarray($DynamicArray, $multiply ) {
    $newarray = [];
    foreach ($DynamicArray as $value) {
        $newarray[] = $multiply($value);
    }
    return $newarray;
}
var_dump(multiplyarray([1,2,3,4,5], $multiply));
echo "<br>";

