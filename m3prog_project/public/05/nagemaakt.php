<?php

function mijnPrint($printText)
{
    print($printText);
    print("<br>");
}

mijnPrint("regel 1");
mijnPrint("regel 2");
mijnPrint("regel 3");
mijnPrint("te weinig argumenten");

$dezeGaatMee = "Deze waarde word meegenomen";
mijnPrint($dezeGaatMee);
?>