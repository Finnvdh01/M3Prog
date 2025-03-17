<?php 

$totaalBesteld = 1001;
$verzendkosten = 3.5;
$korting = 0;
$cadeautje = false;
$cadeauwaarde = 1000;

if($totaalBesteld > 100)
{
    $verzendkosten = 0;
    echo "Verzendkosten zijn gratis </br>";
}
else
{
    echo "Verzendkosten zijn $verzendkosten </br>";
}

if($totaalBesteld > 250)
{
    $korting = 0.05;
    echo "Korting is 10% </br>";
}
else
{
    echo "Korting is 0% </br>";
}
if ($cadeauwaarde > 1000)
{
    $cadeautje = true;
    echo "U krijgt een cadeautje </br>";
}
else
{
    echo "U krijgt geen cadeautje </br>";
}


//statements
$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendkosten);

echo "Totaal van de bestelde artiekelen $totaalBesteld </br>";
echo "Totaal met verzendkosten wordt het $totaal </br>";

//hier moet een if om heen dat doen we later

?>