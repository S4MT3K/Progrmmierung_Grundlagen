<?php
$a = "global"; //global in diesem projekt bzw. in dieser file

function test() {
    $a = "local"; //local in dieser function
    echo $a;
}
echo $a; //echo global
test(); //echo local

//$_GET // $_GET ist ein superglobale variable für die übertragung von informationen
// zu anderen websiten bzw. unterseiten und weiterverarbeitenden seiten
//$_POST //das gleiche gilt für post

//$_COOKIE //Speichert Cookie Variablen
//$_SESSION // Wenn ein Browser geöffnet wird ist diese variable da (müsste evtl. mit session_start() gestartet werden)
//$_SERVER // Server Variablen (var_dumpt euch das)

//$_REQUEST // wird gefüllt (array) wenn man ein formular absendet
echo "<br>";
echo "<br>";
echo "<br>";
echo"<pre>";
print_r($_GET); //Zeigt den inhalt der $_GET variable an
print_r($_REQUEST); //fast wie $_GET
print_r($_POST); //Zeigt den inhalt der $_POST variable an (sollte leer sein weil
// $_GET bzw die get methode standardeinstellung ist

