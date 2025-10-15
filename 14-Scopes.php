<?php

// In PHP, wie in vielen anderen Programmiersprachen, gibt es zwei Haupttypen von Variablenbereichen: global und lokal.

//Lokaler Bereich: Eine lokale Variable ist eine Variable, die innerhalb einer Funktion oder einer Methode definiert wird.
// Sie existiert nur innerhalb der Funktion, in der sie deklariert wurde, und kann nur innerhalb dieser Funktion
// verwendet werden.
//Globaler Bereich: Eine globale Variable ist eine Variable, die außerhalb einer Funktion definiert wird.
// Sie kann überall in Ihrem PHP-Code verwendet werden, mit Ausnahme von Funktionen und Methoden.
// Es ist wichtig zu beachten, dass der unsachgemäße Gebrauch von globalen Variablen zu Code führen kann,
// der schwer zu debuggen und zu warten ist. Daher ist es oft besser, auf den Gebrauch von globalen Variablen zu verzichten,
// wo immer es möglich ist.
$x = 5; // global scope

//function mylocal() {
//    // wenn man x in der Funktion benutzt wird ein Fehler ausgegeben
//    echo "<p>Variable x inside function is: $x</p>";
//}
mylocal();

echo "<p>Variable x outside function is: $x</p>";


function mylocal() {
    $y = 5; // local scope
    echo "<p>Variable x inside function is: $y</p>";
}
mylocal();
//echo $y;
//wenn man y ausserhalb der Funktion benutzt wird ein Fehler ausgegeben
//



$x = 5;
$y = 10;

function myglobal() {
    global $x, $y; // durch das "global" Keyword kann man Variablen aus dem global scope in den locale scope einer Funktion benutzten
    $y = $x + $y;
}

myglobal();
echo $y; // outputs 15
echo '<br>';
// das static Keyword weist PHP an sich den Wert der Variable bei einem Funktionsaufruf zu merken
// und nicht bei jedem aufruf die variable wieder den Wert 0 zuzuweisen

function mystatic() {
    static $x = 0;
    print ("$x <br>");
    $x++;
}

mystatic();  //output 0
mystatic();  //output 1

mystatic();  //output 2