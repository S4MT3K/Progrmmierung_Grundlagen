<?php
function printn(string $string)
{
    print ("$string <br>");
}

printn('Eine "if-Anweisung" in PHP wird verwendet, um Entscheidungen basierend auf Bedingungen zu treffen. Die Syntax lautet');


//if (Bedingung) {
//     Wenn die Bedingung wahr ist, wird der Code in den {} ausgeführt
//} elseif (weitere_Bedingung) {
//     Wenn die erste Bedingung falsch ist, aber diese Bedingung wahr ist, wird dieser Block ausgeführt
//} else {
//     Wenn keine der vorherigen Bedingungen wahr ist, wird dieser Block ausgeführt
//}
//Die Bedingung ist ein Ausdruck, der wahr oder falsch ausgewertet wird.
// Wenn die Bedingung wahr ist, wird der zugehörige Codeblock ausgeführt.
// Wenn die Bedingung falsch ist, wird der Codeblock übersprungen.

if (True or False) {
    printn('True');
}


//Das else-Statement wird ausgeführt, wenn keine der vorherigen Bedingungen wahr ist.
// Es ist optional und kann weggelassen werden, wenn keine Aktion ausführen werden soll,
// wenn keine der Bedingungen erfüllt ist.


if (false) {
    printn('False');
} else {
    printn('else');
}
//Sie können elseif verwenden, um zusätzliche Bedingungen zu überprüfen, wenn die vorherige Bedingung falsch ist
// Es wird immer maximal nur 1 Codeblock ausgefueht. Sobald eine Bedingung True werden keine weiteren Bedingungen geprüft
if (false) {
    printn('if');
} elseif (true) {
    printn('elif');
}
// Eine verschachtelte "if-Anweisung" in PHP wird verwendet,
// um komplexe Bedingungen zu überprüfen,
// indem Sie eine if-Anweisung innerhalb einer anderen platzieren.
// Dies ermöglicht es Ihnen, verschiedene Ebenen von Bedingungen zu überprüfen und entsprechend zu handeln.
// Die Syntax dafür sieht so aus:
// Oft kann man eine verschachtelte "if-Anweisung" vermeiden
// indem man die Bedingungen mit den logischen Operatoren Verknüpft
if (true) {
    if (false) {
        printn('inner if');
    } elseif (true) {
        printn("inner elseif");
    } else {
        printn('inner else');
    }
} elseif (true) {
    printn('elseif');
} else {
    printn("else");
}
