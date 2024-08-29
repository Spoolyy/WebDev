<?php
$string = 'PHP è bellissimo'; // le virgolette singole indicano che sono una stringa a tutti gli effetti.
$date= '2024-07-10';
// $string = "gianni"; sempre considerata una stringa ma che si puo interpolare con altre variabili.

//questi sono vari caratteri di 'escape' che possono essere utilizzati per manipolarle

// \n o \r crea una nuova linea
// \t è sostituito dal carattere di tab o tabulazione
// \$ è sostituito dal segno del dollaro ($)
// \” è sostituito da un singolo doppio apice (“)
// \\ è sostituito da una singola barra rovesciata (\).
echo strlen($string); //conta la lunghezza della stringa in byte
echo "</br>";
//echo mb_strlen($string); //serve a contare i caratteri invece dei byte
//echo "</br>";
echo str_word_count($string); //chiedere a gpt perche non conta i caratteri accentati come parola
echo "</br>";
echo strrev($string); //inverte la stringa
echo "</br>";
echo str_replace("bellissimo","fantastisco", $string);
echo "</br>";
echo substr($string,7,10); //estrae il carattere o una parola specifica in base all'index
echo "</br>";
echo substr($string,-10,3); //modo piu diretto di estrarre caratteri a partire dagli ultimi caratteri
echo "</br>";
$stringpos = strpos($string,"PHP");
if ($stringpos === false)
echo "</br>";
$stringarray = explode(" ", $string);
var_dump($stringarray);
echo "</br>";
echo strtoupper($string);
echo "</br>";
echo strtolower($string);
echo "</br>";
echo date("Y-m-d-H:i:s");
echo "</br>";
$timestamp = strtotime($date);
echo $timestamp;
echo "</br>";
echo date("Y-m-d", $timestamp);
echo "</br>";
