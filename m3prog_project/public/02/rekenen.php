<?php 
$getal = 12.34567; 
$afgerond1 = ceil($getal); 
echo $afgerond1; 
echo "<br>";

$getal2 = $getal; 
$afgerond2 = floor($getal2); 
echo $afgerond2;
echo "<br>";



$random1 = rand(1, 100);
$random2 = rand(1, 100);
$random3 = rand(1, 100);
$som = $random1 + $random2;
$uitkomst = $som / $random3;
echo "Random getal 1: $random1<br>";
echo "Random getal 2: $random2<br>";
echo "Random getal 3: $random3<br>";
echo "($random1 + $random2) / $random3 = $uitkomst";
?>



