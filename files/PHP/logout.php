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
              <a href="../PHP/Index.php">
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
session_destroy();
 
echo "Logout erfolgreich. Zurück zur <a href= Index.php> Startseite.</a>";
?>
