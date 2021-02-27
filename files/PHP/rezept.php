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

$rezeptid = $_GET['rezept'];
$anfrage = "SELECT * FROM $tabellenname WHERE ID=$rezeptid";



if ( $rezeptid != "" ) {  
$ergebnis = mysqli_query ( $link, $anfrage );
my_sql_error ( $ergebnis, $link );
$eintrag = mysqli_fetch_array ( $ergebnis, MYSQLI_ASSOC );
echo "<h2>".$eintrag['Rezeptname']."</h2><br><br><br><br>Platz für ein Bild<br><br><br><br>";
echo $eintrag['arbinfo']."<br><br>";
echo "<table><tr><td>Zubereitungsdauer: ".$eintrag['Zubereitungszeit']."min; </td><td>Schwierigkeitsgrad: ".$eintrag['Schwierigkeitsgrad']."; </td><td>Kalorien: ".$eintrag['Kalorien']."</td></tr></table><br><br>";
echo "Zutaten:<br>". $eintrag['Zutaten']."<br><br>";
echo "Zubereitung:<br><table><tr><td>Zubereitungsdauer: ".$eintrag['Zubereitungszeit']."min; </td><td>Koch-/Backzeit: ".$eintrag['cooktime']."min; </td><td>Ruhezeit: ".$eintrag['waittime']."min</td></tr></table><br><br>";
echo $eintrag['Zubereitung']."<br><br>";
echo "Schlagwörter für dieses Rezept:". $eintrag['category'];


	print <<<EndOfHtml


EndOfHtml;
}else{
	echo 'Hups, da ist wohl etwas schieg gelaufen..';
}
my_html_foot ( );
?>