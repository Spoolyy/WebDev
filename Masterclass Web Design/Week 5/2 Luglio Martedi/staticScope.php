<?php
function notStaticScope() {
    $numberOne = 213;
    echo $numberOne;
    $numberOne = $numberOne+1;
    echo $numberOne;
}
notStaticScope();
echo (' ');
notStaticScope();
echo (' ');
notStaticScope();
echo (' ');

function staticScope() {
    static $numberTwo = 111;
    echo $numberTwo;
    $numberTwo = $numberTwo+1;
    echo $numberTwo;
}
staticScope();
echo (' ');
staticScope();
echo (' ');
staticScope();
echo (' ');