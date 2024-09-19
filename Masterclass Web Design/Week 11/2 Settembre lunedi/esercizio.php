<?php
$numbers = [3,6,2,4,8,12,13,2,32,2,4,1,5,6];
function maxnumber (array $numbers) {
    $maxnumber = $numbers[0];
    if (empty($numbers)) {
        return null;
    } else {
        for ($i = 0; $i < count($numbers); $i++) {
            if ($maxnumber < $numbers[$i]) {
                $maxnumber = $numbers[$i];
            }
        }
        return $maxnumber;
    }
}

echo maxnumber($numbers);