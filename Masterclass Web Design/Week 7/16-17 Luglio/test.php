<?php
echo "Please insert a string: ";
$input = ''; //trim(fgets(STDIN));

function isEmpty ($input) {
    if ($input === '') {
        echo "La stringa è vuota.<br>";
    } else {
        echo "La stringa non e vuota.<br>";
    }
    echo "<br>";
}
isEmpty($input);
