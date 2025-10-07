<?php
declare(strict_types=1);
##
$names = ["Lara", "Ben", "Mia", "Omar", "Zoe"];
$nums  = [12, 5, 19, 5, 42, 7];
$prices = [3.49, 9.99, 1.99, 12.50, 12.49];
$user = ["name" => "Sam", "age" => 36, "active" => true]; //Dies ist ein assoziatives Array (BITTE RECHERCHE, wenn nicht, weglassen)
##


//Echo Übung
echo '#######AUFGABE 1#######';
echo "<br>";
echo "Hallo Welt!";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '#######AUFGABE 2#######';
echo "<br>";
//$var = $user["name"]; //Aus dem assoziativen Array $user wird der Wert von "name" ausgegeben.
//echo "hello " . $user["name"]; //string concatenation
echo " Hello {$user["name"]}"; //Eingebettete variablernausgabe (Inline)
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '#######AUFGABE 3#######';
echo "<br>";
echo "PHP_EOL is out of order, aber funktioniert dennoch mit pre-tag";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//Variablen uebung
echo '#######AUFGABE 4#######';
echo "<br>";
//$int_a = 0;
//$int_b = 0;
echo $int_a = $nums[2]; //19
echo $int_b = $nums[4]; //42
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '#######AUFGABE 5#######';
//Dreieckstausch
//$tmp = "";
//$a =10;
//$b =20;
//
//$tmp = $a;
//$a = $b;
//$b = $tmp;

//richtige Lösung
$a = 2356;
$b = 2;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo $a;
echo "<br>";
echo $b;

[$a, $b] = [$b, $a]; //easiest way to change values of variables without using temporary variables
echo "<br>";
echo "variable ist: $b";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '#######AUFGABE 6#######';
echo "<br>";
function raiseVariablesByStep(int &$var1, int &$var2, int $stepFor1, int $stepFor2) : void
{
    $var1 = $var1 + $stepFor1;
    $var2 += $stepFor2;
}

raiseVariablesByStep($int_a, $int_b, 1, 2);
echo $int_a;
echo $int_b;
echo "<br>";
echo "<br>";
echo "<br>";

//String uebung
echo '#######AUFGABE 7#######';
echo "<br>";
$full = "Hello PHP";

echo "Länge des Wortes " . strlen($full);
echo "<br>";

echo "Die ersten 5 Buchstaben sind: " . substr($full, 0, 5);

echo "<br>";
echo "<br>";

for ($i = 0; $i < 5; $i++)
{
    echo $full[$i];
}
echo "<br>";
echo "das obige Hello ist mit einer eigenen for-schleife erstellt worden";

$myEmail = "email@example.com";

echo "<br>";
echo "<br>";
$char = "@";
$searchforchars = strrpos($myEmail, $char);


$atpos = strrpos($myEmail, "@") + 1;
$domain = substr($myEmail, $atpos);
echo "Der Domainname ist: " . $domain;

echo "<br>";

$myObst = "Apfel,Birne,Banane";
$myObst =  str_replace(",", "|", $myObst);
echo $myObst;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


//Integer uebung

echo '#######AUFGABE 8#######';

echo "<br>";

$n = 42;

function checkIfEven(int $n) : string
{
    if($n % 2 == 0)
    {
        echo "übergabevariable ist gerade: $n";
    }
    else
    {
        echo "übergabevariable ist ungerade: $n";
    }

    return "Die Zahlen wurden Berechnet";
}

//$mailToChef = checkIfEven(49384765); // direkte variable übergeben
$mailToChef = checkIfEven($n); // direkte variable übergeben
echo "<br>";
echo $mailToChef;
echo "<br>";
echo "<br>";

for ($i = 1; $i < 10; $i++)
{
    if($i % 3 == 0)
    {
        echo $i . " ";
    }
}

// Fakultät berechnenen 1*5 = 5; 5*4 = 20; 20*3 = 60; 60*2 = 120;
$zahl = 5;
$erg = 1;
for ($i = 1; $i <= $zahl; $i++) {
    $erg *= $i;
}
echo $erg; // 120
echo "<br>";
echo "<br>";

function fakultaet($n)                     // Die Funktion "fakultaet" wird angelegt, sie besitzt eine Variable n.
{
    if ($n == 1)                           // Der Schleifenabbruch (Ende der Rekursion) wird definiert.
    {
        return 1;                          // Wenn n gleich 1 ist, ist die Berechnung der Schleife beendet.
    }
    else                                   // Wenn n nicht gleich 1 ist,
    {
        return $n * fakultaet ($n-1);   // soll die Funktion nochmals aufgerufen werden
    }                                      // um n mit n-1 zu multiplizieren
}
echo "<br>";
echo fakultaet(5);
echo "<br>";

