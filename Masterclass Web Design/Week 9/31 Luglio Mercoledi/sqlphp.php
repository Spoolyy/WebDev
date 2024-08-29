<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=primoschema","spoolyy","pass1234");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERRORE: Impossibile stabilire una connessione al database");
}