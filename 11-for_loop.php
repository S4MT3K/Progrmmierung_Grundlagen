<?php
// In PHP wird die for-Schleife verwendet, wenn Sie wissen, wie oft der Code ausgeführt werden soll
$start = 0; // Dieser Ausdruck wird zu Beginn der Schleife ausgeführt.
$stop = false; // Die Schleife wird fortgesetzt, solange dieser Ausdruck True ist.
$schrittweite = 1; // Dieser Ausdruck wird am Ende jeder Schleifendurchlauf ausgeführt
for ($start; $stop; $schrittweite) { // Schleifen Kopf
    // code to be executed;            // Schleifen Körper
}


// Eine einfache Schliefe die bis 0-3 Zählt

for ($i = 0; $i <= 3; $i++) {
    echo " i ist $i \n";
}
// Erster Durchlauf
// Initialisierung ($i = 0): Zu Beginn der Schleife wird die Variable $i auf 0 gesetzt.
// Bedingungsprüfung ($i <= 3): Dann wird überprüft, ob $i kleiner oder gleich 3 ist. Da $i zu diesem Zeitpunkt 0 ist,
// ist die Bedingung True und der Schleifenkörper wird durchlaufen innerhalb der Schleife wird ausgeführt.
// echo" i ist $i \n"; wird ausgeführt und gibt -> 'i ist 0' aus
// Nachdem der Schleifenkörper ausgeführt wurde, springt die Schliefe wieder in den kopf
// und $i wird um eins erhöht ($i++). $i == 1
// anschliessend wird die Stop-Bedingung geprüft ($i <= 3) -> 1 <= 3 -> True

// Zweiter Durchlauf
// Der Schleifenkörper wird ausgeführt
// echo" i ist $i <br>"; wird ausgeführt und gibt -> 'i ist 1' aus
// Nachdem der Schleifenkörper ausgeführt wurde, springt die Schliefe wieder in den Kopf
// und $i wird um eins erhöht ($i++). $i == 2
// anschliessend wird die Stop-Bedingung geprüft ($i <= 3) -> 2 <= 3 -> True

// Dritter Durchlauf
// Der Schleifenkörper wird ausgeführt
// echo" i ist $i <br>"; wird ausgeführt und gibt -> 'i ist 2' aus
// Nachdem der Schleifenkörper ausgeführt wurde, springt die Schliefe wieder in den Kopf
// und $i wird um eins erhöht ($i++). $i == 3
// anschliessend wird die Stop-Bedingung geprüft ($i <= 3) -> 3 <= 3 -> True

// Vierter Durchlauf
// Der Schleifenkörper wird ausgeführt
// echo" i ist $i <br>"; wird ausgeführt und gibt -> 'i ist 3' aus
// Nachdem der Schleifenkörper ausgeführt wurde, springt die Schliefe wieder in den Kopf
// und $i wird um eins erhöht ($i++). $i == 4
// anschliessend wird die Stop-Bedingung geprüft ($i <= 3) -> 4 <= 3 -> False
// Die Bedingung ergibt nun False und die Schleife wird gestoppt


// Rückwärts Zählen
for ($x = 10; $x >= 0; $x -= 2) {
    echo "The number is: $x <br>";
}



// Um durch ein Array zu iterieren

$array = ["Bob","Tom","Eve"];

for ($k = 0; $k < count($array); $k++) {
    echo"$array[$k] <br>";
}


// Schleife um eine Summe zu bilden

$zahlen = [12, 45, 78, 23, 56, 89, 34, 67, 90, 12, 45, 78, 23, 56, 89, 34, 67, 90, 12, 45];

$summe = 0; //Variable um die Summe zu speicher auserhalb der Schleife erstellen
// Falls man sie in der Schleife erstellt wird sie bei jedem durchlauf auf 0 gesetzt und man tritt auf der Stelle

for ($j = 0; $j < count($zahlen); $j++) {  // Schleifenkopf zur Berechnung der Summe aller Zahlen des arrays
    $summe += $zahlen[$j]; // auf die Summe den Wert j addieren
}
echo"$summe <br>";

// Schleife um die größte Zahl in einem array zu finden

// Erstellen der Variable in der die größte Zahl gespeichert werden soll und zuweisen des ersten array Items
$max = $zahlen[0];

// Schleifenkopf um durch das array zu iterieren
for ($l = 0; $l < count($zahlen); $l++) {
    if ($max < $zahlen[$l]){ //Prüfen ob der aktuelle max-wert kleiner ist als die Zahl der iteration.
        $max = $zahlen[$l];// Falls der max-wert kleiner war diesen mit der größeren Zahl überschreiben.
    }
}

echo $max;