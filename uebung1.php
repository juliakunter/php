<?php

// Eingaben aus GET oder Standardwerte

$literA = isset($_GET["literA"]) ? floatval($_GET["literA"]) : 40.5;

$literB = isset($_GET["literB"]) ? floatval($_GET["literB"]) : 35.7;
 
// Literpreis bleibt konstant

$preisProLiter = 1.499;
 
// PHP-Basisberechnung (Startwerte)

$gesamtLiter = $literA + $literB;

$gesamtKosten = $gesamtLiter * $preisProLiter;

?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>Benzinkosten Rechner</title>
<style>

    body { font-family: Tahoma, sans-serif; margin: 25px; }

    .inputbereich { background-color: #f0f0f0; padding: 12px; margin-bottom: 20px; }

    .ausgabe { background-color: #e2fce2ff; padding: 12px; }

    label { font-weight: bold; }
</style>
</head>
<body>
<h2>Benzinkosten berechnen</h2>
<div class="inputbereich">
<form id="calcForm">
<p>
<label>Liter A:</label><br>
<input type="number" step="0.1" id="literA" value="<?= $literA ?>">
</p>
<p>
<label>Liter B:</label><br>
<input type="number" step="0.1" id="literB" value="<?= $literB ?>">
</p>
<button type="button" onclick="neuBerechnen()">Berechnen</button>
</form>
</div>
<div class="ausgabe">
<p><b>Gesamtmenge:</b> <span id="outLiter"><?= $gesamtLiter ?></span> Liter</p>
<p><b>Gesamtkosten:</b> <span id="outKosten"><?= $gesamtKosten ?></span> €</p>
</div>
<script>

// Preis ist fix

const preis = 1.499;
 
function neuBerechnen() {

    let A = parseFloat(document.getElementById("literA").value);

    let B = parseFloat(document.getElementById("literB").value);
 
    let gesamt = A + B;

    let kosten = gesamt * preis;
 
    // Ausgabe aktualisieren

    document.getElementById("outLiter").textContent = gesamt.toFixed(2);

    document.getElementById("outKosten").textContent = kosten.toFixed(4);

}
</script>
</body>
</html>

 