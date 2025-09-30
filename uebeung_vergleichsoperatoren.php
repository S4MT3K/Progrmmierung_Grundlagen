<?php

//Erstelle 4 Variablen:
//1. Eine Zahl
//2. Eine Zahl mit komma
//3. Ein Wort
//4. ein Boolean (True)


// Vergleiche Die zahl mit der Kommazahl und lasse dir einen text ausgeben ob die beiden inhaltlichen Werte gleich sind.

// Vergleiche das wort mit der zahl und lasse dir einen Text ausgeben ob diese beiden Datentypisch zusammenpassen oder nicht.

// Prüfe, ob die zahl oder die kommazahl größer als 10 ist und lass dir wieder einen prüftext deiner wahl ausgeben.

// Prüfe ob die zahl oder die kommazahl ein boolean ist.

//Prüfe ob dein wort (string) den Text, "Hello World" beinhaltet, falls nicht, ändere ihn und lass dir die Variable als echo ausgeben.

$int_zahl = 95;
$b = 10.5;
$wort = 'Hallo World';
$boolean = true;

if ($int_zahl == $b)
{
    echo 'Die Werte beider Zahlen sind inhaltlich gleich';
}
else
{
    echo 'Die werte sind nicht gleich<br>';
}

//#######################

if ($int_zahl === $wort)
{
    echo 'Die Werte beider Zahlen sind inhaltlich gleich';
}
else
{
    echo 'Die werte sind nicht identisch<br>';
}

//#######################

if ($int_zahl > 10) {
    if ($b > 10) {
        echo 'Beide Zahlen sind größer als 10.
';
    } else {
        echo 'Die Ganzzahl ist größer als 10, die Kommazahl nicht.
';
    }
} else {
    if ($b > 10) {
        echo 'Die Kommazahl ist größer als 10, die Ganzzahl nicht.
';
    } else {
        echo 'Beide Zahlen sind kleiner oder gleich 10<br>.';
    }
}

if ($int_zahl === $boolean && $b === $boolean ) //Wenn beide true sind...ansonsten
{
    echo ' Beide True';
}
elseif($int_zahl === $boolean) //prüfen ob intzahl true ist... ansonsten
{
    echo 'IntZahl ist ein Boolean, Kommazahl ist nicht';
}
elseif($b === $boolean){ //prüfen ob kommazahl true ist... ansonsten
    echo 'Kommazahl ist ein Boolean, IntZahl ist nicht';
}
else
{
    echo 'Beede FÖHLIKK PFALTSCH'; //alle beide sind keinerlei boolean oder nullen
}
