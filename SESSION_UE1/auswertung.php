<?php
session_start();
echo "<!DOCTYPE html> <html><head><title> Daten ins der Session
speichern</title> </head> <body> <h1> Daten in der Session speichern</h1>";
echo "<p>Sie haben folgende Daten im Folmular eingetragen: ";
echo "<br> Vorname: " . $_POST["vorname"];
echo "<br> Nachname: " . $_POST["nachname"];
echo "<br> Ort: " . $_POST["ort"];
$_SESSION["vorname"] = $_POST["vorname"];
$_SESSION["nachname"] = $_POST["nachname"];
$_SESSION["ort"] = $_POST["ort"];
$_SESSION["zeit"] = time();
echo "<p> Folgende Daten sind nun in der Session gespeichert : </p>";
echo "<pre>";
echo "<p> Weiter zur <a href='auslesen.php'>folgenden Seite</a><p></body></html>";
?>