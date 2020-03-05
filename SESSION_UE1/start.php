<?php
	session_start();
	$id=session_id();
	echo "<!DOCTYPE html>
			<head>
				<title>
					Start einer Session
				</title>
			</head>
			<body>
			Die Session wurde gestartet<br>";
			echo "Session-ID: ".$id;
			echo "<br>Der Name der Session lautet: ".session_name();
			echo "<p>Weiter zur <a href='formular.php'>folgenden Seite</a> 
			</p>
			</body>
			</html>
			";
?>