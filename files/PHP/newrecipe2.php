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
<form action="http://$server$script" method="post">

<div class="menu"><!--  -->
<h3><text>Rezept eingeben: </tex>
<button type="button" class="category" onclick="globaltoggle('rezept', 'zubereitung','category', 'bild', 'vorschau', 'info');">Rezept</button><text>>>></text>
<button type="button" class="category" onclick="globaltoggle('zubereitung','category', 'bild', 'rezept', 'vorschau', 'info');">Zubereitung</button><text>>>></text>
<button type="button" class="category" onclick="globaltoggle('category', 'bild', 'zubereitung', 'rezept', 'vorschau', 'info');">Kategorien</button><text>>>></text>
<button type="button" class="category" onclick="globaltoggle('bild', 'category', 'zubereitung', 'rezept', 'vorschau', 'info');">Rezeptbild</button><text>>>></text>
<button type="button" class="category" onclick="globaltoggle('vorschau', 'bild', 'category', 'zubereitung', 'rezept', 'info');">Vorschau:</button></h3>
</div>
<br><br><br><br>
<div class="wrapper">


<div class="content" id="rezept" style="display:block">
<table>
<tr>
      <td>Rezeptname:</td>
      <td><input type="text" name="rezeptname"></td>
    </tr>
	<tr>
      <td>Zusätzliche Informationen:</td>
      <td><input type="text" name="arbinfo"></td>
    </tr>
	<tr>
      <td>Portionen:</td></tr>
	<tr>
      <td><text>Das Rezept ist ausgelegt für </text><input type="text" name="portion"><text> Portionen</text></td>
    </tr>
	<tr>
      <td>Zutaten und Menge:</td>
      <td><textarea class="zutaten" name="zutaten"></textarea></td>
    </tr>
</table>
<button type="button" class="category" onclick="globaltoggle('zubereitung','category', 'bild', 'rezept', 'vorschau', 'info');">weiter</button>
</div>


<div class="content" id="zubereitung" style="display:none"> 
<table><tr><h3>Rezeptzubereitung</h3><text></tr>
Hier kannst du beschreiben, welche Schritte für die Zubereitung des Rezeptes notwendig sind. <br/>
Bitte achte darauf, dass alle relevanten Informationen enthalten sind, <br/>
z.B. Angaben zur Temperatur des Backofens und dass alle von dir aufgeführten Zutaten enthalten sind. </text>
</tr><tr>
<td><textarea class="howto" name="howto"></textarea></td>
</tr>
<tr>
      <td>Arbeitszeit:<input type="text" name="preptime">min</td>
	  <td>Schwierigkeitsgrad:<select name="difficulty">
    <option value="simpel">simpel</option>
    <option value="normal">normal</option>
    <option value="pfiffig">pfiffig</option>
  </select></td>
    </tr>
	<tr>
      <td>Koch-/Backzeit:<input type="text" name="cooktime">min</td><td>Kalorien:<input type="text" name="kcal"></td>
    </tr>
	<tr>
      <td>Ruhezeit:<input type="text" name="waittime">min</td>
    </tr>
</table>
<button type="button" class="category" onclick="globaltoggle('category', 'bild', 'zubereitung', 'rezept', 'vorschau', 'info');">weiter</button>
 </div>
 
 
 <div class="content" id="category" style="display:none">
 Bitte wähle aus, welche Kategorien deinem Rezept zugeordnet werden sollen.<br/><br/>
 <input type="checkbox" name="bakensweets" value="Backen & Süßspeisen">
  <label for="bakensweets"> Backen & Süßspeisen</label><br>
  <input type="checkbox" name="drinks" value="Getränke">
  <label for="drinks"> Getränke</label><br>
  <input type="checkbox" name="breakfast" value="Frühstück">
  <label for="breakfast"> Frühstück</label><br>
  <input type="checkbox" name="lunch" value="Lunch">
  <label for="lunch"> Lunch</label><br>
  <input type="checkbox" name="abendessen" value="Abendessen">
  <label for="abendessen"> Abendessen</label><br><br>
  <button type="button" class="category" onclick="globaltoggle('bild', 'category', 'zubereitung', 'rezept', 'vorschau', 'info');">weiter</button>
</div>


<div class="content" id="bild" style="display:none">
Wähle die passende Datei (JPG) auf deiner Festplatte aus. Beachte bitte auch unsere Qualitätsstandards.
<br><br>
Die Übertragung der Daten kann mehrere Minuten in Anspruch nehmen. Bitte habe etwas Geduld.<br><br><br><br>
<button>Bild auswählen(funktinoiert nicht)</button><br><br>
<button type="button" class="category" onclick="globaltoggle('vorschau', 'bild', 'category', 'zubereitung', 'rezept', 'info');">weiter</button>
</div> 


<div class="content" id="vorschau" style="display:none">
<table><tr>
<h3>Vorschau: </h3></tr>
<tr>Hier wäre Platz für eine Vorschau
</tr></table>
<span class="noprint"><p><input type="submit" value="Hinzufügen"></p></span>
</div>

</div>
</form>


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
<input type="submit" value="OK">
</form>
EndOfHtml;
my_html_foot ();
}

	
?>