<?php

# WEITERFÜHRENDE DATEI



function myWelcomeMessage($name = "stranger") //stranger ist ein default wert
{
    echo "Hello $name. Welcome to my Website";
}

myWelcomeMessage(); //Aufruf der Funktion ohne Parameter. Default weert wird übernommen.

echo "<br>";
myWelcomeMessage();// Aufrufen mit default name Jim
echo "<br>";
myWelcomeMessage('Tom');// Aufrufen mit geänderten default value Tom
echo "<br>";
myWelcomeMessage($name='George');// Aufrufen mit geänderten default value Tom
echo "<br>";

$value = 'default';

function changeValue($string){
    $string = 'changed';
}

changeValue($value); //kann so nicht geändert werden. da die variable innerhalb der Funktion lokal behandelt wird.
echo $value; //Sie wird nur 'per Value' übergeben.
echo "<br>";
function changeValueByReference(&$string){ //Übergabe per referenz
    $string = 'changed';
}
echo "<br>";
changeValueByReference($value);
echo $value;
echo "<br> ##################";


