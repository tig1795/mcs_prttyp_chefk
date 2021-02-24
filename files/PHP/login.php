<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
  <link rel="stylesheet" href="../CSS/login.css" type="text/css">
</head> 
<body>
    <header>
        <div class="row">
            <div class="logo-row">
              <a href="Index.php">
               <img src="../../images/chefkoch-logo_1-1-30.png" alt="logo" class="logo">
              </a>
            </div>
        </div>
    </header>
<br>

</body>
</html>

<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=chefkoch', 'root', '');
 
if(isset($_GET['login'])) { //Zuerst wird die Datenbank nach der entsprechenden E-Mail-Adresse abgefragt. 
                            //Sollte kein Benutzer gefunden worden sein, so hat der $user den Wert false.
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) { //Überprüfung des Passworts.

    //password_hash() erzeugt bei mehrmaligem Aufruf unterschiedliche Hashwerte selbst bei identischen 
    //Passwörtern. Deswegen funktioniert es nicht, nur die Benutzereingabe zu hashen und diesen Hashwert 
    //mit dem existierenden Hashwert zu vergleichen.

        $_SESSION['userid'] = $user['id'];
    //Sollte ein Nutzer gefunden worden sein und sollte zusätzlich das Passwort stimmen, 
    //wird die Session-Variable userid mit der ID des Benutzers registrieren.
        die('Login erfolgreich. Weiter zur <a href="Index_login.php">Startseite.</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
    
}
?>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
E-Mail:<br>
<br>
<input type="email" size="40" maxlength="250" name="email"><br>
<br>
 
Dein Passwort:<br>
<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
<br>
 
<br>
<input type="submit" value="Abschicken"><br>
<br>

<p>Sie haben noch kein Konto? <a href="registrieren.php">Hier registrieren</a>.</p>
</form> 
</body>
</html>