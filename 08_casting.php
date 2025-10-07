<?php
//Build in Functions
//(string) wandelt den Datentyp in einen string
//(int) - wandelt den Datentyp in einen string Integer
//(float) - wandelt den Datentyp in einen string Float
//(bool) - wandelt den Datentyp in einen string Boolean

$integer = 555;       // Integer
$float = 5.34;    // Float
$string = "hello"; // String
$string_1 = "22"; // String
$bool = true;    // Boolean
$null = NULL;    // NULL




$integer = (string) $integer;
$float = (string) $float;
$string = (string) $string; // castet nicht, weil es schon ein string ist
$bool = (string) $bool;
$null = (string) $null;

//var_dump($integer);
//var_dump($float);
//var_dump($string);
//var_dump($bool);
//var_dump($null);

