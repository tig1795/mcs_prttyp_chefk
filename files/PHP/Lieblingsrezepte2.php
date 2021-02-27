<?php
session_start();
// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];
require ( "funktionen.php" );


my_html_head ( $script );  

$name_der_db  = "chefkoch";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "rezepte";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );


print <<<EOH
        <br>
        <header> »<a href="index2.php"> Startseite</a> » Videos » Lieblingsrezepte</header><br>
        <br>

      <div style="text-align: center;">
        <object data="http://www.youtube.com/embed/PJvf5pF55cA"
        width="860" height="515"></object>
      </div>

      <br>
  <hr>
  <br>
EOH;
  
  
  
  
  
  my_html_foot ();
	?>