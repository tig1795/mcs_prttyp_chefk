<?php
session_start();
// Skript um neue Rezepte anzulegen
require ( "funktionen.php" );

$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];

// Menükategorien: index rezepte magazin community videos dinner meinkochbuch
$title = "rezepte";
my_html_head ( $title );  

$name_der_db  = "chefkoch";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "rezepte";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";



$rezeptname = my_isset_post ( "rezeptname" );


if ( $rezeptname == "" ) {  
	print <<<EndOfHtml
<h3>Einen neuen Datensatz eintragen.</h3>
<form action="http://$server$script" method="post">
  <table>
    <tr>
      <td>Rezeptname:</td>
      <td><input type="text" name="rezeptname"></td>
    </tr>
    <tr>
      <td>Zubereitungszeit:</td>
      <td><input type="text" name="preptime"></td>
    </tr>
    <tr>
      <td>Schwierigkeitsgrad:</td>
      <td><input type="text" name="difficulty"></td>
    </tr>
	<tr>
      <td>Kalorien:</td>
      <td><input type="text" name="kcal"></td>
    </tr>
	<tr>
      <td>Zutaten:</td>
      <td><input type="text" name="zutaten"></td>
    </tr>
	<tr>
      <td>Zubereitung:</td>
      <td><input type="text" name="howto"></td>
    </tr>
  </table>
  <span class="noprint"><p><input type="submit" value="Hinzufügen"></p></span>
  <input type=hidden name=username value="$username">
</form>
EndOfHtml;
	
	exit;
} else {	
  $username = my_isset_post ( "username" );
  $rezeptname = my_isset_post ( "rezeptname" );
  $preptime = my_isset_post ( "preptime" );
  $difficulty = my_isset_post ( "difficulty" );
  $kcal = my_isset_post ( "kcal" );
  $zutaten = my_isset_post ( "zutaten" );
  $howto = my_isset_post ( "howto" );
  
  my_check_input ( $rezeptname, "Rezeptname" );
  my_check_input ( $preptime, "Zubereitungszeit" );
  my_check_input ( $difficulty, "Schwierigkeitsgrad" ); 
  my_check_input ( $kcal, "Kalorien" ); 
  my_check_input ( $zutaten, "Zutaten" );
  my_check_input ( $howto, "Zubereitung" );
  
  if ( mysqli_query ( $link, "INSERT INTO $tabellenname 
    ( User,
	  Rezeptname,
	  Zubereitungszeit,
	  Schwierigkeitsgrad,
	  Kalorien,
	  Zutaten,
	  Zubereitung)
      VALUES 
	( '$username',
	  '$rezeptname',
	  '$preptime',
	  '$difficulty',
	  '$kcal',
	  '$zutaten',
      '$howto' );") ) {
    echo "<h3>Rezept wurde gespeichert.</h3>";
  } else {
	echo "Fehler bei Eingabe";
	exit;
  }

  print <<<EndOfHtml
<p><form action="Index2.php">
<input type="submit" value="OK">
</form>
EndOfHtml;
}
	my_html_foot ();
	
?>