<?php
#Eine Variable ist im Grunde ein "Stellvertreter/platzhalter/gefäß, welches einen Bestimmten wert Aufbewahren kann
#Eine Variable wird definiert indem ihr ein $ vor dem Variablennamen schreibt.
#Mit einem = wird der Wert der Variable zugewiesen. (Zuweisungsoperator)

$my_var = 25;
$my_var = "Fünfundzwanzig";

//eine variable muss nach dem $ Zeichen mit einem Buchstaben Anfangen...
//und die gängige praxis ist es kleinbuchstaben zu verwenden.

//$666 geht nicht.

//Variablennamen dürfen Zahlen, unterstriche, sowie umlaute erhalten, umlaute
// aber bitte tunlichst vermeiden.
$my_varäble = "Hallo Welt!"; //sieht einfach nicht schön aus. Auch englisch als sprache verwenden.


// Keyword ähnliche variablenNamen sichd nicht gut.

$Variable = "Hallo Welt!";
$Function = "BITTE SO NICHT";

//Konventionen der Schreibart:

$snake_case = "Snake_Case"; //wegen der Bindestriche (auch hier, anfangsbuchstabe entweder klein oder groß

$camelCase = "camelCase"; //camelcase weil anfangsbuchstabe klein restlichen anfangsbuchstaben groß

$PascalCase = "PascalCase"; //jeder Anfangsbuchstabe jedes Wortes ist Großgeschrieben

//###############

//vor dem aufrufen einer variablen in einem echo muss die variable
// deklariert und definiert sein, heißt:

//$a Variablen deklarieren (Variable einn Namen geben)
//$a = Wert der Variable zuweisen (Variable einen Wert zuweisen) = Definition.
$echos = "ich bin ein Echo!";

echo $echos;
echo "<br>"; //Zeilenumbruch (HTML-Tag)

// eine direkte ausgabe einer variablen die nicht vorher definiert wurde würde einen Fehler verursachen.

// echo $test; //Gibt fehler aus, da nicht vorher definiert/deklariert wurde.

//Man kann Variablen auch Überschreiben.

$name = "Max";
echo $name;
echo "<br>";
$name = "Maximilian";
echo $name;
echo "<br>";
$name = 21; //der Wert bzw: Die Variable wird automatisch in einen Integer umgewandelt. (CAST)
echo $name;
echo "<br>";


// MAN KANN SO VIELE VARIABLEN ERTSELLEN WIE DER RAM SPEICHER HAT!!!!
// ODER EUER PROGRAMM ES SCHAFFT ZU VERARBEITEN.

//Variablennamen sind frei Wählbar. Und besitzen im grunde keine Begrenzung.
//jedoch sind mehr als 12-20 zeichen zu vermeiden (Lesbarkeit).


//bei der Definition von Variablen kann man auch gleich Mathematische Opreationen durführen.

$berechnung = 25 + 10; // wird mir 35 ausgeben.
$andereBerechnung = 25 - 10;
echo $berechnung;
echo "<br>";

echo $andereBerechnung / $berechnung; // Während des echos kann man berechnungen zweier oder mehr variablen durchführen.
echo "<br>";

//Eine Berechnung (DIVISION) durch null GEHT NICHT !!! FEHLER !!!
$dieNull = 0;
$Zahl = 4;

//echo $Zahl / $dieNull; //Gibt 0 aus. oder Fehler Oder NIX!!!
echo "<br>";

#Um eine variable Hochzuzählen, wird sie aufgerufen und dann mit sich selbst berecvhnet

$autos = 1;

$autos = $autos + 1;

echo $autos;
echo "<br>";

// Inkrementierungen in "Kurzform":

echo $autos++; //Echo erst die variable und erhöhe sie anschliueßend.
echo "<br>";
echo $autos;
echo "<br>";

echo ++$autos; // erst erhöht und dann ausgegeben
echo "<br>";
echo $autos;
echo "<br>";

//Besonderes

$autos = $autos -1; //Die variable muss erneut aufgerufen werden um dann zu subtrahieren
echo $autos;
echo "<br>";

$autos *= $autos; //Kurzschreibweise
echo $autos;
echo "<br>";

