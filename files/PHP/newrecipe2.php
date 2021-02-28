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
  




$rezeptname = my_isset_post ( "rezeptname" );


if ( $rezeptname == "" ) {  
	print <<<EndOfHtml
	<div class="eingabe">
<form action="http://$server$script" method="post">
<br>
<div class="menu"><!--  -->
<h3><text>Rezept eingeben: </text>
<button type="button" class="category" onclick="globaltoggle('rezept', 'zubereitung','category', 'bild', 'vorschau', 'info');">Rezept</button><text>»</text>
<button type="button" class="category" onclick="globaltoggle('zubereitung','category', 'bild', 'rezept', 'vorschau', 'info');">Zubereitung</button><text>»</text>
<button type="button" class="category" onclick="globaltoggle('category', 'bild', 'zubereitung', 'rezept', 'vorschau', 'info');">Kategorien</button><text>»</text>
<button type="button" class="category" onclick="globaltoggle('bild', 'category', 'zubereitung', 'rezept', 'vorschau', 'info');">Rezeptbild</button><text>»</text>
<button type="button" class="category" onclick="globaltoggle('vorschau', 'bild', 'category', 'zubereitung', 'rezept', 'info');">Vorschau:</button></h3>
</div>
<br><br>
<div class="wrapper">


<div class="content" id="rezept" style="display:block">
Rezeptname:<span class="Hinweis">*Pflichtfeld</span><br>
<br><input class="rezinput" type="text" name="rezeptname"><br>
<br>Zusätzliche Informationen:<br>
<br><input class="rezinput" type="text" name="arbinfo"><br>
<br>Portionen:<br>
<br>Das Rezept ist ausgelegt für <input class="portion" type="text" name="portion"> Portionen<br>
<br>Zutaten und Menge:<span class="Hinweis">*Pflichtfeld</span><br>
<br><textarea class="zutaten" rows="4" cols="100" name="zutaten"></textarea><br>
<br>
<button type="button" class="category" onclick="globaltoggle('zubereitung','category', 'bild', 'rezept', 'vorschau', 'info');">weiter</button>
</div>


<div class="content" id="zubereitung" style="display:none"> 
<h3>Rezeptzubereitung<span class="Hinweis">*Pflichtfeld</span></h3>
Hier kannst du beschreiben, welche Schritte für die Zubereitung des Rezeptes notwendig sind. <br/>
Bitte achte darauf, dass alle relevanten Informationen enthalten sind, <br/>
z.B. Angaben zur Temperatur des Backofens und dass alle von dir aufgeführten Zutaten enthalten sind. 
<br>
<br><textarea class="howto" rows="4" cols="100" name="howto"></textarea><br>
<br>Arbeitszeit:<span class="Hinweis">*Pflichtfeld</span><input class="rezinput" type="text" name="preptime">min
<br>
<br>Koch-/Backzeit:<input class="rezinput" type="text" name="cooktime">min
<br><br>Ruhezeit:<input class="rezinput" type="text" name="waittime">min<br>
<br>Schwierigkeitsgrad:<span class="Hinweis">*Pflichtfeld</span><select class="rezinput" name="difficulty">
    <option value="simpel">simpel</option>
    <option value="normal">normal</option>
    <option value="pfiffig">pfiffig</option>
  </select><br>
<br>Kalorien:<input class="rezinput" type="text" name="kcal">
 <br>

<br>
<button type="button" class="category" onclick="globaltoggle('category', 'bild', 'zubereitung', 'rezept', 'vorschau', 'info');">weiter</button>
 </div>
 
 
 <div class="content" id="category" style="display:none">
 Bitte wähle aus, welche Kategorien deinem Rezept zugeordnet werden sollen.<br/><br/>
 <input class="rezinput" type="checkbox" name="bakensweets" value="Backen & Süßspeisen">
  <label for="bakensweets"> Backen & Süßspeisen</label><br>
  <input class="rezinput" type="checkbox" name="drinks" value="Getränke">
  <label for="drinks"> Getränke</label><br>
  <input class="rezinput" type="checkbox" name="breakfast" value="Frühstück">
  <label for="breakfast"> Frühstück</label><br>
  <input class="rezinput" type="checkbox" name="lunch" value="Lunch">
  <label for="lunch"> Lunch</label><br>
  <input class="rezinput" type="checkbox" name="abendessen" value="Abendessen">
  <label for="abendessen"> Abendessen</label><br><br>
  <button type="button" class="category" onclick="globaltoggle('bild', 'category', 'zubereitung', 'rezept', 'vorschau', 'info');">weiter</button>
</div>


<div class="content" id="bild" style="display:none">
Wähle die passende Datei (JPG) auf deiner Festplatte aus. Beachte bitte auch unsere Qualitätsstandards.
<br><br>
Die Übertragung der Daten kann mehrere Minuten in Anspruch nehmen. Bitte habe etwas Geduld.<br><br><br><br>
<button>Bild auswählen(funktioniert nicht)</button><br><br>
<button type="button" class="category" onclick="globaltoggle('vorschau', 'bild', 'category', 'zubereitung', 'rezept', 'info');">weiter</button>
</div> 


<div class="content" id="vorschau" style="display:none">
<h3>Vorschau: </h3>Hier wäre Platz für eine Vorschau
<br><br>
<span class="noprint"><p><input class="newrezept" type="submit" value="Hinzufügen"></p></span>
</div>

</div>
</form>
</div>

<script>
function globaltoggle(show, hide, hide2, hide3, hide4, hide5) {
	
  var x = document.getElementById(show);
  if (x.style.display === "none") {
    x.style.display = "block";
  } 
  var y = document.getElementById(hide);
  if (y.style.display === "block") {
    y.style.display = "none";
  } 
  var y2 = document.getElementById(hide2);
  if (y2.style.display === "block") {
    y2.style.display = "none";
  } 
  var y3 = document.getElementById(hide3);
  if (y3.style.display === "block") {
    y3.style.display = "none";
  } 
  var y4 = document.getElementById(hide4);
  if (y4.style.display === "block") {
    y4.style.display = "none";
  } 
  var y5 = document.getElementById(hide5);
  if (y5.style.display === "block") {
    y5.style.display = "none";
  } 
} 
</script>
<br>

EndOfHtml;
my_html_foot ();	
	exit;
} else {


	
  $userid = $_SESSION['userid'];
  $rezeptname = my_isset_post ( "rezeptname" );
  $preptime = my_isset_post ( "preptime" );
  $difficulty = my_isset_post ( "difficulty" );
  $kcal = my_isset_post ( "kcal" );
  $zutaten = my_isset_post ( "zutaten" );
  $howto = my_isset_post ( "howto" );
  $arbinfo = my_isset_post ( "arbinfo" );
  $portion = my_isset_post ( "portion" );
  $cooktime = my_isset_post ( "cooktime" );
  $waittime = my_isset_post ( "waittime" );
  
  $abendessen = my_isset_post ( "abendessen" );
  $lunch = my_isset_post ( "lunch" );
  $breakfast = my_isset_post ( "breakfast" );
  $drinks = my_isset_post ( "drinks" );
  $bakensweets = my_isset_post ( "bakensweets" );
  $category = "$abendessen $lunch $breakfast $drinks $bakensweets";
  
  my_check_input ( $rezeptname, "Rezeptname" );
  my_check_input ( $preptime, "Zubereitungszeit" );
  my_check_input ( $difficulty, "Schwierigkeitsgrad" ); 
  my_check_input ( $kcal, "Kalorien" ); 
  my_check_input ( $zutaten, "Zutaten" );
  my_check_input ( $howto, "Zubereitung" );
  my_check_input ( $arbinfo, "Infofeld" );
  my_check_input ( $portion, "Portionsangabe" );
  my_check_input ( $cooktime, "Koch-/Backzeit" );
  my_check_input ( $waittime, "Ruhezeit" );
  
  
  if ( mysqli_query ( $link, "INSERT INTO $tabellenname 
    ( User,
	  Rezeptname,
	  Zubereitungszeit,
	  Schwierigkeitsgrad,
	  Kalorien,
	  Zutaten,
	  Zubereitung,
	  arbinfo,
	  portion,
	  cooktime,
	  waittime,
	  category)
      VALUES 
	( '$userid',
	  '$rezeptname',
	  '$preptime',
	  '$difficulty',
	  '$kcal',
	  '$zutaten',
      '$howto',
	  '$arbinfo',
	  '$portion',
	  '$cooktime',
	  '$waittime',
	  '$category' );") ) {
    echo "<h3>Rezept wurde gespeichert.</h3>";
  } else {
	echo "Fehler bei Eingabe";
	exit;
  }

  print <<<EndOfHtml
<p><form action="Index2.php">
<input class="rezinput" type="submit" value="OK">
</form>
EndOfHtml;
my_html_foot ();
}

	
?>