<?php
//
//Erstellt ein Array mit 20 namen.
//Löscht den 12 und 13. Eintrag.
// Benutzt dabei bitte zwingend eine eigene Funktion mit übergabeparametern
//und benutzt bitte die Build in Functions array_pop, array_shift, array_splice oder array_slice
//begründet vor und nachteile eurer Vorgehensweise.

//Viel Erfolg
$names = [
    "Anna", "Ben", "Chris", "Diana", "Elias",
    "Fiona", "Gabriel", "Hannah", "Isaac", "Julia",
    "Kevin", "Laura", "Max", "Nina", "Oliver",
    "Paula", "Quentin", "Ronja", "Sarah", "Tim"
];

echo "<pre>";
print_r($names);

function spliceArray(&$array, $start, $length)
    {
        array_splice($array, $start - 1, $length);
    }

    spliceArray($names, 12, 2);

echo "<pre>";
print_r($names);

// nehmt dasselbe array, und iteriert hindurch, bis ihr den 12 und 13 eintrag findet,
// und gebt den 12. und 13. in einem Echo aus. Verwendet bitte if, else... und keine Build in Array funktionen.


#### LÖSUNG AUFGABE ####


// schreibt eine Funktion die das vorhandene Array nach namen, länger as 5 zeichen durchsucht und gebt mit dieser
// funktion ein neues array namens $newNames zurück.
//Sonderaufgabe: Bearbeitet das alte array so, dass die "alten" Namen darin nicht mehr vorhanden sind.