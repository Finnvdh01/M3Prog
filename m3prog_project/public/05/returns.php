<?php 
function mijnFunction()
{
 $result = rand();
 return $result;
  
}

function returnVariable(){
    return 1;
}

$results = returnVariable();
$mijnFunctionResultaat = mijnFunction();

echo $results;
echo "<br>";
echo mijnFunction();
echo "<br>";
echo mijnFunction();
echo "<br>";
echo mijnFunction();
echo "<br>";
echo mijnFunction();

?>