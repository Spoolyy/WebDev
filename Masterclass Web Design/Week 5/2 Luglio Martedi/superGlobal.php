<?php
$alessio = 'Spoolyy';
//var_dump($GLOBALS);
var_dump($_SERVER['HTTP_USER_AGENT']);
echo $_SERVER['HTTP_USER_AGENT'];
var_dump($_GET); //aggiungi all'URL ?nome=alessio&cognome=simeone
var_dump($_FILES); //mostra i file caricati tramite form
var_dump($_COOKIE); //mostra i cookie del sito (se ce ne sono)
var_dump($_SESSION); //contiene dati relativi alla sessione corrente
var_dump($_REQUEST); //contiene tutti i parametri che sono in GET, POST e COOKIE
var_dump($_ENV); //contiene le variabili d'ambiente (del file .env)
