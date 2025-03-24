<?php

$hoeLangIsDitWoord = "scrabbleWoord";

$woordLengte = strlen($hoeLangIsDitWoord);
print($woordLengte);

//vraag 1: het type is een string
//vraag 2: hij returned een int
//vraag 3: een interger 

$hoeLangIsDitWoord2 = "helikopterplatform";

$woordLengte2 = strlen($hoeLangIsDitWoord2);
print($woordLengte2);

//vraag 1.5: Het type is een string 
//vraag 2.5: hij returned een int
//vraag 3.5: een interger
//vraag 4: Ik heb de strlen function 2 keer aangeroepen


$tweeMachtTwee = pow(2,2);
print (pow(2,2));
echo "<br>";

$tweeMAchtTien = pow(2, 10);
print (pow(2, 10));
echo  "<br>";

$derdeMacht = pow(3,4);
print("<br>");
print(pow(3,4));

print("<br>");

// vraag 1) We geven het resultaat door met een print functie
// strtoupper bron: https://www.php.net/manual/en/function.strtoupper.php

    $naam = "pac-man";
    $naamGroot = strtoupper($naam);
    print($naamGroot);

    print("<br>");
    $naamKlein = strtolower($naam);
    print($naamKlein)

?>