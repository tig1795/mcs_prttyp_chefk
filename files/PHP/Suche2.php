<?php
session_start();
// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];
require ( "funktionen.php" );

// Menükategorien: index rezepte magazin community videos dinner meinkochbuch
$title = "rezepte";
my_html_head ( $title );   

$name_der_db  = "chefkoch";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "rezepte";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );


print <<<EOH
  <br>
  <header>Suchergebnisse:</header><br>
  <br>
    <section>
        <p>
EOH;
            if(isset($_GET["search"])){
                $suchwort = $_GET["search"];
                $abfrage = "";
                $abfrage2 = "";
                $suchwort = explode(" ", $suchwort);
                for($i = 0; $i < sizeof($suchwort); $i++)
                {
                    $abfrage .= "`Rezeptname` LIKE '%" . $suchwort[$i] . "%'";
                    $abfrage2 .= "`Zutaten` LIKE '%" . $suchwort[$i] . "%'";
                    if($i < (sizeof($suchwort) - 1)) {
                        $abfrage .= "OR"; 
                        $abfrage2 .= "OR";    
                    }
                }
                $db = @new mysqli('localhost', 'root', '', 'chefkoch');

                if(mysqli_connect_errno() == 0)
                {
                    $sql = "SELECT * FROM `rezepte` WHERE ".$abfrage . "OR" . $abfrage2;
                    $ergebnis = $db->query($sql);

                    echo '<table border="1">';
                    while ($zeile = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC))
                    {
                        echo '<tr>';
                        echo "<td>". $zeile['ID'] . "</td>";
                        echo '<td><a href="rezept.php?rezept='.$zeile["ID"].'">'. $zeile['Rezeptname'] . "</a></td>";
                        echo "<td>". $zeile['Zubereitungszeit'] . "</td>";
                        echo "<td>". $zeile['Schwierigkeitsgrad'] . "</td>";
                        echo "<td>". $zeile['Kalorien'] . "</td>";
                        echo "<td>". $zeile['Zutaten'] . "</td>";
                        echo "<td>". $zeile['Zubereitung'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }

        

  print'  </section>';
    
my_html_foot ( );
?>