<?php

$wahr = True;
$oderwahr = true;

$falsch = False;
$oderfalscch = false;

var_dump($wahr);
echo "<br>";

var_dump($falsch);
echo "<br>";
echo "<br>";
echo "<br>";

echo("==<br>");
echo"Vergleicht den Wert zweier Variablen.<br>";
echo "Datentypen werden nicht berücksichtigt.<br>";

echo "<br>";
echo('----------------------------------------');
echo "<br> 15 == 15<br>";
var_dump(15 == 15);  # True
echo "<br> 15 == 20<br>";
var_dump(15 == 20);  # False
echo "<br> 15 == 15.0<br>";
var_dump(15 == 15.);  # True
echo "<br> 15 == '15'<br>";
var_dump(15 == "15");  # True
echo "<br>  '15' == '15.0'<br>";
var_dump('15' == '15.0');  # True
echo "<br> '15' == 'fünfzehen'<br>";
var_dump('15' == 'fünfzehen');  # False
echo "<br>";
echo "<br>";

echo("===");
echo " Vergleicht Wert und Datentyp<br>";
echo "<br>";
echo('----------------------------------------');
echo "<br> 15===15<br>";
var_dump(15 === 15);  # True
echo "<br> 15 === 20<br>";
var_dump(15 === 20);  # False
echo "<br> 15 === 15.0<br>";
var_dump(15 === 15.);  # False
echo "<br> 15 === '15'<br>";
var_dump(15 === "15");  # False
echo "<br>  '15' === '15'<br>";
var_dump('15' === '15');  # True
echo "<br> '15' === 'fünfzehen'<br>";
var_dump('15' === 'fünfzehen');  # False
echo "<br>";
echo "<br>";
echo "<br>";



echo("!=");
echo " Prueft, ob zwei Werte ungleich sind<br>";
echo " Wenn die Werte ungleich sind, ergibt die Prüfung TRUE<br>";

echo "<br>";
echo('----------------------------------------');
echo "<br> 15!=15<br>";
var_dump(15 != 15);
echo "<br> 15 != 20<br>";
var_dump(15 != 20);
echo "<br> 15 != 15.0<br>";
var_dump(15 != 15.);
echo "<br> 15 != '15'<br>";
var_dump(15 != "15");
echo "<br>  '15' != '15'<br>";
var_dump('15' != '15');
echo "<br> '15' != 'fünfzehen<br>'";
var_dump('15' != 'fünfzehen');
echo "<br>";
echo "<br>";
echo "<br>";



echo("!==");
echo " Prueft, ob zwei Werte und Datentypen ungleich sind<br>";
echo " Wenn die Werte ungleich sind oder die Datentypen unterschiedlich sind, ergibt die Prüfung TRUE.<br>";

echo "<br>";
echo('----------------------------------------');
echo "<br> 15!==15<br>";
var_dump(15 !== 15);
echo "<br> 15 !== 20<br>";
var_dump(15 !== 20);
echo "<br> 15 !== 15.0<br>";
var_dump(15 !== 15.);
echo "<br> 15 !== '15'<br>";
var_dump(15 !== "15");
echo "<br>  '15' !== '15'<br>";
var_dump('15' !== '15');
echo "<br> '15' !== 'fünfzehen<br>'";
var_dump('15' !== 'fünfzehen');
echo "<br>";
echo "<br>";
echo "<br>";


echo("< (kleiner als) > (größer als)<br>");
echo "Beide Operatoren vergleichen die Werte zweier Variablen.<br>";
echo "Das Ergebnis ist TRUE, wenn die linke Variable kleiner (<) bzw. größer (>) als die rechte Variable ist.<br>";


echo "<br>";
echo('----------------------------------------');
echo "<br> 15 < 15";
var_dump(15 < 15) ;
echo "<br>";

echo "<br> 15 > 15";
var_dump(15 > 15);
echo "<br>";

echo "<br> 16 > 15";
var_dump(16 > 15);
echo "<br>";

echo "<br> 16 < 15";
var_dump(16 < 15);
echo "<br>";
echo "<br>";
echo "<br>";

echo(">=<= (kleiner gleich) und >= (größer gleich)");
echo "<br>";
echo('----------------------------------------');
echo "<br>15 >= 15";
var_dump(15 >= 15);
echo "<br>";
echo("<=");
echo "<br>";
echo('----------------------------------------');
echo "<br>15 <= 15";
var_dump(15 <= 15) ;
echo "<br>";


echo "Wichtig<br>";

echo"Die genannten Operatoren funktionieren zuverlässig mit numerischen Datentypen (z. B. Integer, Float).<br>";
echo "Bei der Verwendung mit Strings (Zeichenketten) erfolgt ein lexikographischer Vergleich. Dabei werden<br>";
echo "die Zeichencodes verglichen, um die alphabetische Reihenfolge zu bestimmen.<br>";

echo"In PHP dienen die Operatoren and, or und xor der logischen Verknüpfung von Wahrheitswerten (Boolean).<br>";

echo "1. and (Und):";
echo "<br>";
echo "Verknüpft zwei Wahrheitswerte.";
echo "<br>";
echo "Das Ergebnis ist TRUE nur dann, wenn beide Bedingungen TRUE sind.";
echo "<br>";
echo "Ansonsten ergibt die Prüfung FALSE.";
echo "<br>";
echo "<br>";
var_dump($wahr and $falsch);
echo "<br>";

echo "2. or (Oder):";
echo "<br>";
echo "Verknüpft zwei Wahrheitswerte.";
echo "<br>";
echo "Das Ergebnis ist TRUE, wenn mindestens eine Bedingung TRUE ist.";
echo "<br>";
echo "Wenn beide Bedingungen FALSE sind, ergibt die Prüfung ebenfalls FALSE.";
echo "<br>";
var_dump($wahr or $falsch);
echo "<br>";

echo "3. xor (Exklusiv-Oder):";
echo "<br>";
echo "Verknüpft zwei Wahrheitswerte.";
echo "<br>";
echo "Das Ergebnis ist TRUE genau dann, wenn genau eine Bedingung TRUE ist.";
echo "<br>";
echo "Wenn beide Bedingungen TRUE oder FALSE sind, ergibt die Prüfung FALSE.";
echo "<br>";
var_dump($wahr xor $falsch);
