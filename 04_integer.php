<?php
# Ein integer ist eine ganze Zahl ohne "Komma"
$zahl = 123;
# Es können auch negative Zahlen sein
$zahl_negativ = -123;
echo PHP_INT_MAX; // groester int
echo "\n ";
echo PHP_INT_MIN; // kleinster int
echo "\n";
echo PHP_INT_SIZE; // bytes eines int


# mit int können alle mathematician Operatoren verwendet werden
# addition
$zahl1 = 100;
$zahl2 = 50;
$plus = $zahl1 + $zahl2;
echo "\n";
var_dump($plus);
# subtraktion
$minus = $zahl - $zahl2;
echo "\n";
var_dump($minus);
#  multiplikation
$mul = $zahl * $zahl2;
echo "\n";
var_dump($mul);
#  division
echo "\n";
$div = 9 / 3;
var_dump($div); # bei der Division erhält man als Ergebnis nicht IMMER einen Float
// vardump gibt den typen sowie den inhalt einer Variable
$div2 = 10 / 3;
echo "\n";
var_dump($div2);