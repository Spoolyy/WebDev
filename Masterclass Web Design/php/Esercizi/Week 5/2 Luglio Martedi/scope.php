<?php
function testScopeOne (){
    $x = 10;
    echo $x;
}
$y = 20;
function testScopeTwo(){
    global $y;
    echo $y;
}
testScopeOne();
testScopeTwo();