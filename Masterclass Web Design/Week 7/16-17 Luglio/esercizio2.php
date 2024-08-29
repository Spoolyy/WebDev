<?php
$calcolareMedia = [[1, 2], [3, 4], [5, 6]];

function calcolaMedia ($calcolareMedia) {
    $somma = 0;
    $count = 0;
    foreach ($calcolareMedia as $group) {
        foreach ($group as $value) {
            $somma += $value;
            $count++;
        }
    }
    return $somma / $count;
}

echo calcolaMedia($calcolareMedia);
