<?php
$first = 2;
$second = 4;
$third = 6;
$soglia = 3;
$somma = $first;
$somma += $second;
$somma += $third;
$media = $somma / 3;
var_dump($media > $soglia);