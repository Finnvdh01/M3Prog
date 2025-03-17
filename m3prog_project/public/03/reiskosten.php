<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten Berekening</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Reiskosten Berekening</h1>

    <?php
    // Variabelen
    $afstand = 924.50; 
    $literprijs = 1.89; 
    $treinprijs = 60.00; 
    $verbruik_per_km = 1 / 15; 
    $tankinhoud = 50; 

    // Berekeningen
    $liter_gebruikt = $afstand * $verbruik_per_km; 
    $aantal_tanken = ceil($liter_gebruikt / $tankinhoud); 
    $totale_kosten_auto = $liter_gebruikt * $literprijs; 

    // Beslissing met if-else statement
    if ($totale_kosten_auto > $treinprijs) {
        $keuze = "Ik ga met de trein.";
    } else {
        $keuze = "Ik ga met de auto.";
    }

    // echos
    echo "<p>Afstand: <strong>$afstand km</strong></p>";
    echo "<p>Totaal verbruik: <strong>" . number_format($liter_gebruikt, 2) . " liter</strong></p>";
    echo "<p>Aantal keren tanken: <strong>$aantal_tanken keer</strong></p>";
    echo "<p>Totale kosten met de auto: <strong>€" . number_format($totale_kosten_auto, 2) . "</strong></p>";
    echo "<p>Treinprijs enkele reis: <strong>€$treinprijs</strong></p>";
    echo "<h2>$keuze</h2>";
    ?>

</div>

</body>
</html>
