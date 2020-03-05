<?php
session_start();
?><!DOCTYPE html>
<html>
    <head>
    <title>
    Sessiondaten und Session löschen</h1>
    </title>
    </head>
    <body>
    <h1>Sessiondaten und Session löschen </h1>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    unset ($_SESSION["vorname"]);
    echo "</pre>";
    $_SESSION = array();
    print_r($_SESSION);
    echo "</pre>";
    $_SESSION = array();
    print_r($_SESSION);
    echo "<p>Die Session mit der ID  " . session_id() . "wurde";
    if(session_destroy()){
        echo "erfolgreich gelöscht. ";
    }else {
        echo "nicht gelöscht";
    }
    echo "</p>";
    ?>
    </body>
    </html>
    