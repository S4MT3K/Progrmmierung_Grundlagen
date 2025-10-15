<?php
// Die while-Schleife ist eine grundlegende Kontrollstruktur in der Programmierung,
// die die Ausführung eines Codeblocks wiederholt, solange eine bestimmte Bedingung erfüllt ist1.
//In einer while-Schleife wird eine Bedingung geprüft, und wenn diese Bedingung true ist,
// wird der Codeblock innerhalb der Schleife ausgeführt. Nachdem der Codeblock ausgeführt wurde,
// wird die Bedingung erneut geprüft. Dieser Prozess wird so lange wiederholt, bis die Bedingung false ist.
// Es ist wichtig zu beachten, dass man vorsichtig sein muss, um keine Endlosschleifen zu erstellen.
// Eine Endlosschleife ist eine Schleife, deren Bedingung immer true ist,


//while( true or false){  // so lage die Bedingung true ist wird der Code -> Endlosschleife weil immer True
//    print 'while';
//
//}


//while( true or false){  // so lage die Bedingung true ist wird der Code
//    print 'while';
//
//}


//einfache Schleife die von 0 bis 4 Zaehlt
$x = 0;

while ($x < 5) {
    print "$x<br> ";
    ++$x;
}
// durch ein array iterieren mit einer while Schleife
$array = ["eins", 'zwei', 'drei'];

$j = 0;
while ($j < count($array)) {
    print "$array[$j] <br>";
    ++$j;
}


//Break: Das break-Keyword wird verwendet, um die Ausführung der aktuellen Schleife vollständig zu beenden.
// Wenn break innerhalb einer Schleife ausgeführt wird, wird die Schleife sofort beendet und die Ausführung setzt mit
// dem nächsten Befehl nach der Schleife fort

$k = 0;
while ($k < 10) {  // Schleife von 0 bis 9 durch das break läuft sie nur von 0 bis 4
    if ($k == 5) {  // check, ob die Variable 5 ist
        break;  // Wenn $k == 5 wird die Schleife beendet
    }
    print "$k <br>";
    $k++;
}

//solange ein array durchsuchen bis ein Element gefunden wurde
$heu = ["eins", 'zwei', 'drei', 'vier'];

$j = 0;
while ($j < count($heu)) {
    if ($heu[$j] == "drei") {
        break; // stop die Schleife, sobald der string 'drei im array gefunden wurde.
    }
    print "$heu[$j] <br>";
    ++$j;
}

print '<br>';
print '<br>';
print '<br>';
print '<br>';

//Continue: Das continue-Schlüsselwort wird verwendet, um die aktuelle Iteration der Schleife zu überspringen
// und mit der nächsten Iteration fortzufahren

$heu = ["eins", 'zwei', 'drei', 'vier'];

$j = 0;
while ($j < count($heu)) {
    if ($heu[$j] == "drei") {
        ++$j;
        continue; // überspringt die den Schleifen durchlauf mit "drei" und macht mit 'vier' weiter ohne 'drei' auszugeben'.
    }
    print "$heu[$j] <br>";
    ++$j;
}


//Es ist wichtig zu beachten, dass die do-while-Schleife ihren Codeblock mindestens einmal ausführt, bevor die Bedingung
// geprüft wird. Das bedeutet, dass der Codeblock auch dann ausgeführt wird, wenn die Bedingung von Anfang an false ist.
// Dies unterscheidet die do-while-Schleife von der while-Schleife, bei der die Bedingung vor der Ausführung
// des Codeblocks geprüft wird
// "Fussgesteuerte Schleife"

$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 6);