<?php
// ich bin ein Kommentar
# ich bin auch ein kommentar
#echo 'Helloooooo World!'; // ich bin eine Ausgabe kein Consolen Log

//Variablen in PHP benötigen vor Ihrem Namen ein dollar Zeichen $

$int_zahl = 32; //Deklariert als $Zahl mit dem zugewiesenen Wert 3 (Definition)

$wort = '3'; //Hier wird der Wert 3 als String gespeichert

$float_zahl = 3.14; //Hier wird der Wert 3.14 als Float gespeichert

$bool_wahr = true; //Hier wird der Wert true als Boolean gespeichert

$bool_falsch = false; //Hier wird der Wert false als Boolean gespeichert



if ($int_zahl !== $wort) //Prüft Genauestens, ob die Variablen vom gleichen Typ sind
    {
        echo $bool_wahr;
    }
else // falls nicht, gebe das aus
    {
        echo $bool_falsch;
    }

//Vergleichsoperatoren

// == und === (das eine prüfft inhaltlich das andere zusätzlich den Datentyp)
// != (Nicht inhaltlich gleich) !== (Nicht inhaltlichgleich und vom gleichen Datentyp)
// && (Und) || (Oder)
// % Modulo operator (Restrechner)

//echo $int_zahl % 2;