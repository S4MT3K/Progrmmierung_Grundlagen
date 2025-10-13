<?php
$assoc_arr =
    [
    "one"   => 1, "two"   => 2,
    "three" => 3, "four"  => 4,
    "five"  => 5, "six"   => 6,
    "seven" => 7, "eight" => 8,
    "nine"  => 9, "ten"   => 10
    ];

//INDEX-BASIERTES ARRAY
$numb_arr = array(1,2,3,4,5,6,7,8,9,10);

echo "<pre>";

//wilde möglichkeit mit den positionen des arrays zu "spielen"
//for ($i = 1; $i < count($numb_arr) + 1; $i++) {
//    echo "<br>Der Inhalt des " . $i .
//        ". Schleifendurchlaufs ist: " .
//        "'" . $numb_arr[$i - 1] . "'";
//}


//AUFGABE:

//LASST EUCH MIT EINEM FOR LOOP die werte aus dem assoziativem array ausgeben
//Bitte mit den "wert" des keys mit angeben also "one" "two" "three"...

//Beispiel einer ausgabe: Der wert des keys "one" ist: 1;