<?php
$parola = 'Ferrari Ferrari';
function calcolaVocali ($parola) {
$parolaLength = strlen($parola);
    if ($parolaLength > 10) {
        for ($i = 0; $i < $parolaLength; $i++) {
            if ($parola[$i] == 'a' || $parola[$i] == 'e' || $parola[$i] == 'i' || $parola[$i] == 'o' || $parola[$i] == 'u') {
                $parola[$i] = '*';

            }
        }
        echo $parola;
    }
    echo $parola . "</br>";
}
calcolaVocali($parola);