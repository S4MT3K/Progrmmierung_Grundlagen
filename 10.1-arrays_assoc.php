<?php
function printn(string $string)
{
    echo("$string <br>");
}

//Assoziative Arrays in PHP sind Arrays, bei denen Schlüssel (Key) explizit zugewiesen werden.
//Anders als bei indizierten Arrays, bei denen die Schlüssel automatisch durch den Index generiert werden,
//können Sie in assoziativen Arrays benannte Schlüssel verwenden, um auf die Werte (Values) zuzugreifen

// Erstellen
$assoziativesArray = array(
    "name" => "John",
    "alter" => 30,
    "stadt" => "Berlin"
);

$user = ['name' => "John", "alter" => 30, "stadt" => "Berlin"];
// key Value pair 1  key name value John
// key Value pair 2  key alter value 30
// key Value pair 1  key stadt value Berlin
var_dump($user);
printn('');

# Auswahl Item erfolgt ueber den Key
printn($user['name']);

array_keys();
array_key_exists();
// Einen Value ändern

$user["name"] = 'Bob';
printn($user['name']);

// hinzufügen
$user["email"] = "test@php.de";

var_dump($user);

array_push($user,"id"); // Erzeug ein neues Key value pair mir den Key 0 und den Value id
var_dump($user);


//Entfernen
printn("");

// mit array pop das letzte Element loeschen]
array_pop($user);
var_dump($user);

// mit unset ueber den Key das Paar entfernen
unset($user['name']);