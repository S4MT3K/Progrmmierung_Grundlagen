<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document of the greatest</title>
    <link rel="stylesheet" href="styles.css"> <!-- link to css file -->
</head>
<body>

<!-- Ich bin ein Kommentar -->

<h1>ICH BIN EINE ÜBERSCHRIFT</h1>
<h2>ICH BIN EINE ÜBERSCHRIFT</h2>
<h3>ICH BIN EINE ÜBERSCHRIFT</h3>
<h4>ICH BIN EINE ÜBERSCHRIFT</h4>
<h5>ICH BIN EINE ÜBERSCHRIFT</h5>
<h6>ICH BIN EINE ÜBERSCHRIFT</h6>
<p style="margin-bottom: -15px; font-size: 60px;">Ich bin ein Text</p>
<p>Ich bin ein Text</p> <!-- p ist ein Paragraph-->
Ich bin ein text <br><hr> <!--hr ist ein horizontaler Strich-->
<a href="https://www.google.de">Ich bin ein link zu google </a>
<img alt="Bild eines Sonnenuntergangs" src="/pictures/Unbenannt1.jpg"> <!--alt ist ein alternativer Text-->
<br>
<br>
<div>Ich bin ein "Container"</div>
<span>I am totally weird...</span> <!-- span ist ein Container-->
<br>
<br>
<ol> <!-- ol ist ein ordered list, ul wäre eine unordered list-->
    <li>aIch bin ein Listenelement</li>
    <li>ccIch bin ein Listenelement</li>
    <li>hIch bin ein Listenelement</li>
    <li>nIch bin ein Listenelement</li>
    <li>Ich bin ein Listenelement</li>
    <li>oIch bin ein Listenelement</li>
</ol>
<p>
    <hr>
<table> <!-- table ist ein tabellenformatierer-->
    <tr>Ich bin die erste Tabellenzeile
        <td> <!-- td ist ein tabellenzelle-->
            INFO1
        </td>
        <td>
            INFO2
        </td>
        <td>
            INFO3
        </td>
    </tr>
    <tr>Ich bin die zweite Tabellenzeile
        <td>
            INFO1.1
        </td>
        <td>
            INFO2.1
        </td>
        <td>
            INFO3.1
        </td>
    </tr>
</table>
<p>
<table style="width:100%">
    <tr>
        <th>Company</th> <!-- th ist ein tabellenkopf-->
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
    </tr>
</table>

<br>
<br>
<br>
<div class="board">
<?php
for($i = 0; $i <8; $i++)
{
    for($j = 0; $j < 8; $j++)
    {
        $color = (($i + $j) % 2 == 0) ? "dark" : "light"; ?>
        <div class="sq <?php echo $color; ?>"></div> <!-- php code wurde in html eingebunden, inline php, embedded php -->
    <?php
    }
}
?>

    <br>
    <br>
    <br>
<?php
//Ein Multidimensionales Array
//$firma = [ //EINE MÖGLICHKEIT
//        ["name" => "Max", "vorname" => "Mustermann", "geburtsdatum" => "1990-01-01"],
//];
//$firma = [[1,2,3,4], 1,"fr"];
//
//for ($i = 0; $i < count($firma); $i++)
//{
//    if (is_array($firma[$i]))
//    {
//        var_dump($firma[$i]);
//        echo "ist ein array";
//    }
//    echo gettype($firma[$i]);
//}

$firma = [];
$mitarbeiter = [];
$chefetage = [];

$buck = ["name" => "Buck", "last_name" => "Barnes", "age" => 30];
$sam = ["name" => "sam", "last_name" => "bandoly", "age" => 36];
$tim = ["name" => "tim", "last_name" => "dereine", "age" => 2465];

$firma = ["mitarbeiter" => $mitarbeiter, "chefetage" => $chefetage];

//$firma["mitarbeiter"][] = $buck; //ohne key erstellt also indexed
$firma["mitarbeiter"]["buck"] = $buck; //ohne key erstellt also assoziiert
echo "<pre>";
print_r($firma);







?>
</body>
</html>