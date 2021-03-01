<?php 
session_start(); //Start der Registrierung
$pdo = new PDO('mysql:host=localhost;dbname=chefkoch', 'root', ''); //Aufbau der Verbindung zur Datenbank
//Datenbankname ist chefkoch, der Name des Datenbanknutzers ist root und der Nutzer verfügt über ein leeres
//Passwort.
?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Registrierung</title>   
  <link rel="stylesheet" href="../CSS/login.css" type="text/css"> 
</head> 
<body>
<header>
    <div class="row">
        <div class="logo-row">
            <a href="Index2.php">
               <img src="../../images/chefkoch-logo_1-1-30.png" alt="logo" class="logo">
            </a>
        </div>
    </div>
</header>
<br>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular angezeigt werden soll (Standardwert ist true).
 
if(isset($_GET['register'])) { //Überprüfung, ob der GET-Parameter übergeben wurde bzw. ob das Formular
                               //für die Registrierung abgesendet wurde.
    $error = false;
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];
                                //Abfragen der Daten aus dem Formular.
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Gültigkeit der E-Mail Adresse.
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    }     
    if(strlen($passwort) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }
    if($passwort != $passwort2) { //Prüfung, ob beide Passwörter identisch sind.
        echo 'Die Passwörter müssen übereinstimmen<br>';
        $error = true;
    }
    
    //Überprüfung, dass die E-Mail-Adresse noch nicht registriert wurde.
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $error = true;
        }    
    }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

        //password_hash() erzeugt bei mehrmaligem Aufruf unterschiedliche Hashwerte selbst bei identischen 
        //Passwörtern. Deswegen funktioniert es nicht, nur die Benutzereingabe zu hashen und diesen Hashwert 
        //mit dem existierenden Hashwert zu vergleichen.
        
        $statement = $pdo->prepare("INSERT INTO users (vorname, nachname, email, passwort) VALUES (:vorname, :nachname, :email, :passwort)");
        //SQL-Query zum eintragen des neuen Nutzers.
        //Vorbereitung eines Datenbankstatements.

        $result = $statement->execute(array('vorname' => $vorname, 'nachname' => $nachname, 'email' => $email, 'passwort' => $passwort_hash));

        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="login2.php">Zum Login</a>';
            $showFormular = false; //Verhinderung im Erfolgsfall einer erneuten Ausgabe 
                                  // des Registrierungsformulars.
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    } 
}
 
if($showFormular) {
?>
 
<form action="?register=1" method="post">
Vorname:<br>
<br>
<input type="firstname" size="40" maxlength="250" name="vorname"><br>
<br>

Nachname:<br>
<br>
<input type="lastname" size="40" maxlength="250" name="nachname"><br>
<br>

E-Mail:<br>
<br>
<input type="email" size="40" maxlength="250" name="email"><br>
<br>
 
Dein Passwort:<br>
<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
<br>
 
Passwort wiederholen:<br>
<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br>
<br>
 
<br>
<input type="submit" value="Abschicken"><br>
<p>Sie haben bereits ein Konto? <a href="login2.php">Hier anmelden</a>.</p><br>
<br>

</form>
 
<?php
} //Ende von if($showFormular)
?>
 
</body>
</html>