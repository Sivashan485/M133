<?php
    session_start();
    include("fallbeispiel_artikel.inc.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Praline-Bestellformular</title>
    </head>
    <body>
    <h1>Fallbeispiel "Shop: Formular 1 - Praline"</h1>
    <p>Bestellung: Praline -tragen Sie die gewünschte Menge ein. </p>
    
    <form action="fallbeispiel_warenkorb.php" method="POST">
        <table border="l" bgcolor="#DSFOFS"> 
        <tr><th>Art.-Nr.</th><th>Artikel</th><th>Menge</th><th>Einheit</th></tr>
        <?php
        foreach ($praline_feld as $key => $value){
            echo "<tr><td align='center'>$key</td><td>$value</td>";
            echo "<td><input type='text' name='$key'
            value='" .(isset($_SESSION[$key]) ? $_SESSION [$key]: '0') ."'
            size='5' style='text-algin:right'>";
            echo "</td><td>Tafel (100g)</td></tr>";
        }
        ?>
        <tr>
            <td colspan = "4">
            <input type="submit" name="schoko" value="In den Warenkorb">
            <input type="submit" name="abbruch" value="Abbrechen">
            </td>
        </tr>
    </table>
    </form>
    </body>
</html>