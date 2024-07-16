<?php
 //le costanti predefinite in php iniziano sempre con due underscore '__'
echo __FILE__; //contiene le informazioni sul percorso del file corrente
echo "<br>";
echo __DIR__; //contiene il percorso della directory in cui e' contenuto il file corrente
echo "<br>";
function example() {
    echo __FUNCTION__;
}
example(); //mostra in quale funzione ti trovi
echo "<br>";
echo __LINE__; //ti dice in che line ti trovi
echo "<br>"; 
//__CLASS__ , __METHOD__ , __NAMESPACE__ , __TRAIT__ servono quando si utilizza la programmazione ad oggetti in php