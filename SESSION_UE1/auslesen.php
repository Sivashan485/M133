<?php
session_start();
?><!DOCTYPE html>
	<html>
	<head><title>Auslesen der Sessiondaten</title></head>
		<body>
			<h1>Auslesen der Sessiondaten</h1>
			<?php
			echo "<p><em>Folgende Variablen wurden gespeichert ('list'):</em><br>";
			while(list($key, $value)=each($_SESSION)){
			echo $key . " = " . $value . "<br>";
			}
			echo "<p><em>Direktes Ansprechen der Variablen:</em><br>";
			echo "Vorname aus der Session- Datei: " . $_SESSION["vorname"] . "<br>";
			echo "Nachname aus der Session-Datei: " . $_SESSION["nachname"] . "<br>";
			echo "Ort aus der Session-Datei: " . $_SESSION["ort"] . "<br>";
			echo "Zeitstempel aus der Session-Datei: " . $_SESSION["zeit"] . "</p>";
			echo "<p>Weiter zur <a href='session_destroy.php'> folgende Seite</a>. </p>";
			?>
		</body>
	</html>
			