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
foreach ($assoc_arr as $key => $value) {
    echo "<br>Der wert des keys '$key' ist: $value";
}

//myclass.dosomething(); schreibweise in üblichen programmiersprachen (!)
//$myclass=>dosomething(); //schreibweise in php
echo "<br>";
$myFunc = fn() => "Hello World <br>";

$add = fn($a, $b) => $a + $b;

function addThat($a, $b) //"Normal" way to define a function
{
    return $a + $b;
}
$addedbyreralfunc = addThat(1, 2); //ausgabe der normal funktion

$sub = fn($a, $b) => $a - $b; //Kurzschreibweise der Funktion sog. Arrow Function
$mul = fn($a, $b) => $a * $b;
$div = fn($a, $b) => $a / $b;

//echo $myFunc();
echo $add(1, 2); //ausgabe der kurzfunktion (aufruf und übergabe)

//AUFGABE: Gustavi hat eine Freundin, sie möchte die bestehenden konten zusammenführen.
// Gustavi hat 289€ auf dem Konto, seine Freundin Rebecca hat 345€.
// erstelle eine Funktion, die die beiden werte der konten einliest, sie Addiert und auf Gustavis
// konto überweist. Rebeccas kontostand soll danach 0, gustavis kontostand die summe
// beider kontostände sein.


$ktn_G = 289;
$ktn_R = 345;

echo "<br>";
echo "<br>";
echo "<br>";
echo "Vor der Kontozusammenführung:";
echo "<br>";
echo "Gustavis Konto : $ktn_G €";
echo "<br>";
echo "Rebeccas Konto : $ktn_R €";
echo "<br>";
echo "<br>";

function sumKontoToFirst(int &$ktn_first, int &$ktn_second) : void //DEFINITION
{
    $ktn_first += $ktn_second;
//    $newKontostand = $ktn_first + $ktn_second;
//    $ktn_first = $ktn_first + $ktn_second;
    $ktn_second = 0;
}

sumKontoToFirst($ktn_G, $ktn_R); //FUNKTIONSAUFRUF

echo "Nach der Kontozusammenführung:";
echo "<br>";
echo "Gustavis Konto : $ktn_G";
echo "<br>";
echo "Rebeccas Konto : $ktn_R";







