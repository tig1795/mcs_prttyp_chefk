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
echo "<br><h2>".$eintrag['Rezeptname']."</h2><br><br><img src=\"../../images/Beispielbild-01.jpg\" height=\"400\"/><br><br>";
echo $eintrag['arbinfo']."<br><br>";
echo "<div class=\"content\"><span class=\"mini\">Zubereitungsdauer: ".$eintrag['Zubereitungszeit']."min</span><span class=\"mini\">Schwierigkeitsgrad: ".$eintrag['Schwierigkeitsgrad']."</span><span class=\"mini\">Kalorien: ".$eintrag['Kalorien']."</span></div><br><br>";
echo "<div class=\"content\"><h5>Zutaten:<h5><br>". $eintrag['Zutaten']."</div><br><br>";
echo "<div class=\"content\">Zubereitung:<br><br><table><tr><td>Zubereitungsdauer: ".$eintrag['Zubereitungszeit']."min;</td><td>Koch-/Backzeit: ".$eintrag['cooktime']."min; </td><td>Ruhezeit: ".$eintrag['waittime']."min</td></tr></table><br>";
echo $eintrag['Zubereitung']."</div><br><br>";
echo "<div class=\"content\">Schlagwörter für dieses Rezept:". $eintrag['category']."</div><br>";


	print <<<EndOfHtml


EndOfHtml;
}else{
	echo 'Hups, da ist wohl etwas schieg gelaufen..';
}
my_html_foot ( );
?>