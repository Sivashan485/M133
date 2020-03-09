<?php
session_start();
include ( "fallbeispiel_artikel.inc.php");
?><!DOCTYPE html>
<html>
    <head>
        <title>Kasse</title>
    </head>
<body>
<hl>Fallbeispiel "Shop": Bestellung abschliessen</hl>
<?php
if (isset($_POST["absenden"])) {
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $ort = $_POST["ort"];
    echo "<p>Sie haben folgende Bestellung übermittelt:</p>";
    echo "<p><strong>$vorname $nachname aus $ort</strong></p>";
    echo "<table border='1'><tr><th>Art.-Nr.</th><th>Artikel</th>
        <th>Menge</th></tr>";
    $bestellung = "\n\nArt.-Nr.;Artikel;Menge\n";
    while (list($key, $value) = each($_SESSION)) {
    if (substr($key, 0, 1) == "s") {
        echo "<tr><td>$key</td><td>$schoko_feld[$key]</td>
        <td>$value</td></tr>";
        $bestellung .= "$key;$schoko_feld[$key] ;$value\n";
    }
    if(substr($key,0,1)=="p"){
        echo "<tr><td>$key</td><td>$praline_feld[$key]</td>
        <td>$value</td></tr>";
        $bestellung .= "$key;$praline_feld[$key] ;$value\n"; 
    }
}
$bestellung .= "\nbestellt von\n$vorname;$nachname;$ort\n\n";
echo "</table><p>Vielen Dank! Die Session wird beendet.</p>"; 
if (file_put_contents ("bestellung.csv", $bestellung, FILE_APPEND)){
    echo "<p><em>Die Bestelldaten wurden in der Datei bestellung.csv 
    gespeichert</em></p>"; 
}
$_SESSION= array();
session_destroy(); 
}else{
    ?>
    <p>Bitte füllen Sie die nachfolgenden Eingabefelder aus: </p>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <p>Vorname: <input type="text" name="vorname"></p>
    <p>Nachname: <input type="text" name="nachname"></p>
    <p>Wohnort: <input type="text" name="ort"></p>
    <p><input type="submit" name="absenden" value="Absenden und Bestellung
abschließen"></p>
</form>
<?php
}
?>
</body>
</html>



