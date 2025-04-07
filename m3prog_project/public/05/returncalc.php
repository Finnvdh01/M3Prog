<?php 
function add($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    return $som;
}



$results = add(4,9);
echo $results;
echo "<br>";
$results = add(100,100);
echo $results;
echo "<br>";
$results = add(33,333);
echo $results;
function subtract($getal1, $getal2){
    $som = $getal1 - $getal2;
    return $som;
} 
$resultsSubtraction = subtract(30,7);
echo $resultsSubtraction;
echo "<br>";
function divide($getal1, $getal2){
    $som = $getal1 / $getal2;
    return $som;
}
$resultsDivision = divide(25,4);
echo $resultsDivision;
echo "<br>";
function multiply($getal1, $getal2){
    $som = $getal1 * $getal2;
    return $som;
}

$resultsMultiply = multiply(3, 7);
echo $resultsMultiply;
echo "<br>";
?>