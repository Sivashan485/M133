<?php
    session_start();
    include("fallbeispiel_artikel.inc.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ihr Warenkorb</title>
    </head>
    <body>
    <h1>Ihr Warenkorb</h1>
    <?php
    if(isset($_POST["schoko"]) or isset($_POST["praline"])){
        while (list ($key, $value) = each($_POST)){
            if($value >=1){
                $_SESSION[$key] = floor($value);
            } else{
                if(isset($_SESSION[$key])){
                    unset($_SESSION[$key]);
                }
            }
        }
    }
    echo "<table border='1'>
            <tr><th>Art.-Nr.</th><th>Artikel</th><th>Menge</th></tr>";
            while(list($key, $value) = each($_SESSION)){
                if(substr($key, 0, 1)=="s"){
                    echo "<tr><td>$key</td><td>$schoko_feld[$key]</td>
                                <td>$value</td><tr>";
                }
                if(substr($key, 0, 1) == "p") {
                    echo "<tr><td>$key</td><td>$praline_feld[$key]</td>
                    <td>$value</td></tr>";      
                }
            }
            echo "<table>";
            ?>
            <p>Was möchten Sie tun?</p>
            <ul>
            <li><a href="fallbeispiel_form-schoko.php">Schokolade bestellen</a></li>
            <li><a href="fallbeispiel_form-praline.php">Pralinen bestellen</a></li>
            <li><a href="fallbeispiel_kasse.php">Bestellung abschliessen</a></li>
            </ul>

    </body>
    </html>