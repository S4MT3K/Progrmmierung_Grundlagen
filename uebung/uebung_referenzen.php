<?php
$name = "Max";
$name_long = "Maximilian";
$age = 22;
$weight = 80;
$height = 1.80;

echo "<br>";
echo $name;
echo "<br>";
echo $name_long;
echo "<br>";
echo $age;
echo "<br>";
echo $weight;
echo "<br>";
echo $height;

function changeName(&$oldname, $newName) // mit & überschreibt $name ohne nicht
{
    echo "<br>";
    echo $oldname . " before change";
    $oldname = $newName;
    echo "<br>";
    echo $oldname . " after change";
}
changeName($name, "Lisa");

echo "<br>";
echo $name;

$name = "Max";
echo "<br>";
echo $name;