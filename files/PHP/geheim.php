<?php
session_start();

// Überprüfen, ob Session-Variable userid existiert. 
//Falls nicht, wird der Nutzer darauf hingewiesen, dass sich dieser zuerst registrieren muss.
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>