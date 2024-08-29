<?php
//ci sono operatori matematici, confronto e logici
//quelli matematici operano su due valori e restituscono un operazione matematica: '+','-','*','/','%','**'
//quelli di confronto sono quelli che seguono l'algebra booleana (true o false) e servono a confrontare due cose.
//quelli logici agiscono su due operandi e restituiscono true o false '&&(and)','||(or)','!(not)'

//operatori matematici
echo 'operatori matematici';
$firstNumber = 6;
$secondNumber = 3;
var_dump($firstNumber + $secondNumber); //addizione
var_dump($firstNumber - $secondNumber); //sottrazione
var_dump($firstNumber * $secondNumber); //moltiplicazione
var_dump($firstNumber / $secondNumber); //divisione
var_dump($firstNumber % $secondNumber); //modulo o resto
var_dump($firstNumber ** $secondNumber); //potenza
$secondNumber+=$firstNumber; //$secondNumber = $secondNumber + $firstNumber;
$secondNumber++;//aumentare di 1

//operatori di confronto
echo 'operatori di confronto';
$e = 0;
$c = 1;
$d = 2;
var_dump($c == $d); //uguaglianza
var_dump($e == true);
var_dump($c == true);
var_dump($d == true);
var_dump($c === true); //uguaglianza assoluta/identico, 
var_dump($c != $d); //differenza
var_dump($e != true);
var_dump($c != true);
var_dump($d != true);
var_dump($d !== true); //differenza precisa (tipo e dato)
var_dump($c < $d); //minore di
var_dump($c > $d); //maggiore di
var_dump($c <= $d); //minore o uguale di
var_dump($c >= $d); //maggiore o uguale di

var_dump((bool)''); //dato falsy
var_dump((bool)[]);
//il dato falsy e' quel tipo di dato che non e' quantificabile in quanto non ha un valore (stringa vuota, arrya vuoto, false, 0)
var_dump((bool)' '); //dato thruty
var_dump((bool)1);
var_dump((bool)-2);
var_dump((bool)'ciao');
var_dump((bool)2.134);
var_dump((bool)'false');
//il dato thruty e' invece qualcosa di quantificabile, non nullo (maggiore di 0, true, stringa NON vuota etc.)

//operatori logici
echo 'operatori logici';
var_dump($c == 1 && $d > 1); //true perche entrambe le condizioni vengono rispettate
var_dump($c == 3 && $d > 7); //false perche una o entrambe le condizioni NON vengono rispettate
var_dump($c == 2 || $d > 1); //true perche una delle due condizioni viene rispettata
var_dump($c == 3 || $d > 7); //false perche NESSUNA delle due condizioni viene rispettata
var_dump($c != $d); //true perche la condizione viene rispettata
var_dump($c != $c); //false perche la condizione NON viene rispettata
//gli operatori logici rispettano il PEMDAS, (Parentesi, Esponenti, Moltiplicazioni, Divisioni, Addizioni e Sottrazioni) e vengono valutate da sinstra verso destra
var_dump($c == 1 && $d > 1 || $d > 3); //true perche le condizioni sono rispettate