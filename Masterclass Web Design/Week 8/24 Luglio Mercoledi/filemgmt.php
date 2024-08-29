<?php

$filename = "testfile.txt";

if (false === file_exists($filename)) {
    echo"il file non esiste, mi appresto a crearlo";
    file_put_contents($filename, "Ecco il tuo nuovo file");

} else {
    file_put_contents($filename, ", come stai?", FILE_APPEND);
    $leggitesto = file_get_contents($filename);
    echo $leggitesto;
}

echo "<br>";

$letturatesto = file_get_contents($filename);
// Esercizio: Gestione di un File di Testo con file_get_contents e file_put_contents

// In questo esercizio, utilizzeremo le funzioni file_get_contents e file_put_contents per leggere e scrivere un file di testo. Creeremo un file, scriveremo del contenuto in esso, leggeremo il contenuto e 
// aggiungeremo nuove informazioni al file.

// Obiettivo

//     Creare un file e scrivere del testo al suo interno utilizzando file_put_contents.
//     Leggere il contenuto del file utilizzando file_get_contents e stamparlo.
//     Aggiungere nuove informazioni al file utilizzando file_put_contents in modalità append.
//     Leggere nuovamente il contenuto del file e stamparlo.

// Passaggi

//     Creare e Scrivere nel File:
//         Utilizzeremo file_put_contents per creare un file chiamato testfile.txt e scrivere del testo al suo interno.
//     Leggere il Contenuto del File:
//         Utilizzeremo file_get_contents per leggere il contenuto del file e stamparlo.
//     Aggiungere Nuove Informazioni al File:
//         Utilizzeremo file_put_contents in modalità append per aggiungere nuove informazioni al file.
//     Leggere Nuovamente il Contenuto del File:
//         Utilizzeremo file_get_contents per leggere il nuovo contenuto del file e stamparlo.