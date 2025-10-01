<?php
# Ein String ist eine Sequenz von Zeichen
# strings werden mit ' oder " geschrieben.

$my_string = "Hallo Welt!";
$my_string2 = 'Hallo 2. Welt';

# in " " ist es möglich variablen und spezielle zeichen zu verwenden.
// (escaping) LEIDER NUR MIT <pre> möglich... PHP is doof
echo "<pre>Hallo Welt! \t das war ein Tabstop </pre>";

$name = "Säm";
echo "Hallo $name!"; //gibt den Wert der variable in dem Funktionalen string aus. also " ".
// 'Hallo $name!' gibt Hallo $name! als string direkt aus ohne die variable zu nehmen.


# spezielle Zeichen leitet man mit einem \ ein

#<br> -> newline
echo "hallo<br>$name";
echo "<br>";
# \t tabulator
echo "hallo\t$name";
echo "<br>";
# \\ ume ein \ zu machen
echo "c:\\user\\$name";
echo "<br>";
# \" um eine " in einem string dazustellen
echo "der \"$name\"";
echo "<br>";

echo "Der Name hat " . strlen($name) . " Zeichen (Bits)."; // zählt die buchstaben bzw. bits eines Wortes
echo "<br>";          // umlaute und spezielle zeichen werden zusätzlich gezählt

$wort = "Hallo Welt, dies ist ein Test";

echo str_word_count($wort); // Direkter weg zum ausgeben des returnwerts der Build-In Function str_word_count
echo "<br>";

// man kann strings miteinander verbinden (String - Concatination)

$vornamen = "Max";
$nachnamen = "Mustermann";
$vvmann= "Fuhrmann";

//Aufgabe: Schreibe eine Funktion, die vor- und nachname miteinander verbindet und ein echo ausgibt mit "Hallo Max Mustermann".
function begrueßung($v, $n)
{
    echo "Hallo $v $n";
}


//echo $v;//gibt es nicht, nur innerhalb der Funktion

begrueßung(1, 2);
echo "<br>";
begrueßung("Sam", "dod");
echo "<br>";

//verkettung mit PUNKT .

echo "Hallo" . " " . "Welt";