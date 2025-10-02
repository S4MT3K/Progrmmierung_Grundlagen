<?php
//Numerische Arrays (Index-basierte Arrays)
//Bedeute nicht, dass das Array nur aus Zahlen bestehen muss, bzw. nur integers beinhaltet

$myArray = [1, 2, 3, 4, 5]; //Integer-Array


$teilnehmer = ["Tim", "Sam", "Lisa", "Peter", "Ali", "Alisja", "Samantha"];

echo "<pre>";
var_dump($teilnehmer);
echo "</pre>";

echo "Hello $teilnehmer[1]"; // Der name mit index 1 ist sam.


// Array Merge

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
echo "<pre>";

$mergedArray = array_merge($array1, $array2); //Fügt zwei arrays zu einem zusammen
var_dump($mergedArray);
echo "<pre>";echo "<br>";
$mergedArray[] = 7; //Rudimentärer weg ein neues element dem array zuzufügen
array_push($mergedArray, 8, 4, 5, 7, 8); //build in function zum einfügen "mehrerer" elemente
var_dump($mergedArray);

echo "<br>";

function popArrayNumberOfTimes(&$array, $times)
{
    for ($i = 0; $i < $times; $i++)
    {
        array_pop($array);
        echo "<br>";
        echo "Array: Wurde gepoppt Anzahl: " . ($i+1);
    }
}
popArrayNumberOfTimes($mergedArray, 5);
echo "<br>";
echo "<br>";

var_dump($mergedArray);