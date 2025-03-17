<?php 
$stoplichtkleur = 'G';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if($stoplichtkleur == "G")//als Groen
    {
        echo  "<button style='background-color:#64cc25;height:25px;width:25px;'/>";
    }
    else if($stoplichtkleur == "O")//als orangje
    {
        echo  "<button style='background-color:#faba10;height:25px;width:25px;'/>";
    }
    else//als rood
    { 
       
      echo  "<button style='background-color:#ff0000;height:25px;width:25px;'/>";
    }

    
    ?>
</body>
</html>