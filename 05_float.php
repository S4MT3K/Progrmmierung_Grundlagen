<?php
# floats sind kommazahlen
var_dump(PHP_FLOAT_MAX);
var_dump(-PHP_FLOAT_MAX);
var_dump(PHP_FLOAT_MIN);
var_dump(-PHP_FLOAT_MIN);

$zahl1 = 2.5;  # positive
$zahl2 = - 0.55;  # negative

$zahl3 = +1.55;
$zahl = 0.123;
$zahl5 = .123;  # gleicher wert wie in Zeile 8

$zahl4 = 4.0 ; #  float
echo($zahl4);
var_dump($zahl4);
echo "<br>";
$ergebnis = 2 * 3;
echo "\n2 (".gettype(2).") * 3 (".gettype(3).") = $ergebnis (".gettype($ergebnis).")".'<br>';  # int
var_dump($ergebnis);
$ergebnis = 2 * 3.;

echo "\n2 (".gettype(2).") * 3. (".gettype(3.).") = $ergebnis (".gettype($ergebnis).")".'<br>';  # int
var_dump($ergebnis);
$ergebnis = 2. * 3;
echo "\n2. (".gettype(2.).") * 3 (".gettype(3).") = $ergebnis (".gettype($ergebnis).")".'<br>';  # int
var_dump($ergebnis);
$ergebnis = 2. * 3.;
echo "\n2. (".gettype(2.).") * 3. (".gettype(3.).") = $ergebnis (".gettype($ergebnis).")".'<br>';  # int
var_dump($ergebnis);


$a = 6 / 3;
$b = 6 / 3.;
$c = 6. / 4;
$d = 6. / 3.;
echo "<br>";
echo "<br>";
echo "<br>";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);

var_dump(0.2 + 0.1);


//0.2 -> 0.2 * 2 = 0.4 -> 0
//0.4 -> 0.4 * 2 = 0.8 -> 0
//0.8 -> 0.8 * 2 = 1.6 -> 1
//0.6 -> 0.6 * 2 = 1.2 -> 1
//0.2 -> 0.2 * 2 = 0.4 -> 0