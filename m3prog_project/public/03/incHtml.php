<?php
$loggedin = false;
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
    if(isSet($_GET['loggedin']))
    {
       $loggedin=false;
    }
    else
    {
        include "views/home.html";
    }
    ?>
</body>
</html>