<?php
session_start();
include ( "fallbeispiel_artikel. inc .php");
?><!DOCTYPE html><html>
<head><title>Kasse</title></head>
<body>
<hl>Fallbeispiel "Shop": Bestellung abschließen</hl>
<?php
@ if (isset($_POST["absenden"])) {$vorname = $_POST [ "vorname" J ;
$nachname = $_POST["nachname"];
$ort = $_POST[11ort11J;
echo "<p>Sie haben folgende Bestellung übermittelt:</p>";
echo "<P><strong>$vorname $nachname aus $ort</strong></P>";
echo "<table border='l'><tr><th>Art.-Nr.</th><th>Artikel</th>
<th>Menge</th></tr>";
$bestellung = 11\n\nArt.-Nr.;Artikel;Menge\n";
while (list($key, $value) = each($_SESSION)) {
if (substr($key, O, 1) == "s") {
echo "<tr><td>$key</td><td>$schoko_feld[$key]</td>
<td>$value</td></tr>";
$bestellung .= 11$key;$schoko_feld[$key] ;$value\n"; 
