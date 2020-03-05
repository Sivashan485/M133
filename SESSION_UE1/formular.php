<?php
	session_start();
?><!DOCTYPE html>
<html>
	<head>
		<title>
		Formular zur Eingabe der Daten
		</title>
	</head>
	<body>
		<h1>Session: Angaben zur Person</h1>
		<p>Bitte füllen Sie die nachfolgenden Eingabefelder aus: </p>
	<form action="auswertung.php" method="POST">
		<p>Vorname: <input type="text" name="vorname"></p>
		<p>Nachname: <input type="text" name="nachname"></p>
		<p>Wohnort: <input type="text" name="ort"></p>
		<p><input type="submit" value="Abschicken"></p>
	</form>
	</body>
</html>