<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Berechnung der Benzinkosten">
    <title>Benzinkosten</title>
</head>
<body>

<h1>Berechnung der Benzinkosten</h1>

<?php
// 1. Teil: Werte festlegen und Kosten berechnen
$liter1 = 40.5;
$liter2 = 35.7;
$preis = 1.499;

$kosten = ($liter1 + $liter2) * $preis;

// 2. Teil: Ergebnisanzeige
echo "Die Benzinkosten betragen für " . ($liter1 + $liter2) . " Liter " . $kosten . " €";
?>

</body>
</html>
