<?php
$assoc_arr =
    [
        "one" => 1, "two" => 2,
        "three" => 3, "four" => 4,
        "five" => 5, "six" => 6,
        "seven" => 7, "eight" => 8,
        "nine" => 9, "ten" => 10
    ];

//INDEX-BASIERTES ARRAY
$numb_arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

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


$ktn_G = createKtn(2250.74, 17.6, 255);
//$ktn_G = [289];
$ktn_R = createKtn(13.8, 176.6, 255, 3420.55, 50);
//$ktn_R = [22.5,17.6,13.8];

echo "<br>";
echo "<br>";
echo "<br>";
echo "Vor der Kontozusammenführung:";
echo "<br>";
echo "Gustavis Konto : " . array_sum($ktn_G) . " €";
echo "<br>";
echo "Rebeccas Konto : " . array_sum($ktn_R) . " €";
echo "<br>";
echo "<br>";

function createKtn(...$positions): array
{
    $pos_arr = [];
    foreach ($positions as $position) {
        $pos_arr[] = $position;
    }
    return $pos_arr;
}

//AUFGABE: Summiert jeweils jedes array einzeln OHNE build in function
// zieht einen betrag von rebecca ab (soll im array hinzukommen) und addiert
//gustavi den betrag auf seinen konto


function getSumOfArr(array $myArr): float // == sum_array() also die build in function
{
    $sum = 0; //temporäre variable
    foreach ($myArr as $value) { //zählschleife bzw. objektschleife
        $sum += $value; //Hier passiert die rechnung
    }
    return $sum; //Rückgabewert
}

function sumKontoToFirst(array &$ktn_first, array &$ktn_second, float $amount): void //DEFINITION
{
    $kontostandDesZweitenKontos = getSumOfArr($ktn_second);

    if ($kontostandDesZweitenKontos >= $amount)//check ob überwiesen werden kann
    {
        //Bitte gern noch allein ausfüllen
    } else {
        echo "<br>Nicht genug Geld auf dem Konto <br>";
    }
}

sumKontoToFirst($ktn_G, $ktn_R, 399); //FUNKTIONSAUFRUF

echo "Nach der Kontozusammenführung:";
echo "<br>";
echo "Gustavis Konto : $ktn_G €"; //Wieso kann das so nicht gehen = ;) Gern Recherchieren
echo "<br>";
echo "Rebeccas Konto : $ktn_R €"; //Wieso kann das so nicht gehen = ;) Gern Recherchieren







