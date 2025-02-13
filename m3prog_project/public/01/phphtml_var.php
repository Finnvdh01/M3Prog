<?php  

$title = "Mijn mooie website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame = "Super Metroid";
$mooisteGetal= 42;
$favorieteshow = "The Mandalorian";
$leukstestad = "Tokyo";
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum ?>, en de tijd is <?php echo $tijd ?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame;?></p>

        <p><h2>Mijn mooiste getal</h2><?php echo $mooisteGetal;?></p>

        <p><h2>Mijn favoriete show</h2><?php echo $favorieteshow;?></p>

        <p><h2>Mijn leukste stad</h2><?php echo $leukstestad;?></p>
    </body>
</html>