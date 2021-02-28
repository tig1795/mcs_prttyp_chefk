<?php
session_start();
// Startseite hier können allgemeine Funktionen oder aktuelles angezeigt werden
$server = $_SERVER["SERVER_NAME"];
$script = $_SERVER["SCRIPT_NAME"];
require ( "funktionen.php" );

// Menükategorien: index rezepte magazin community videos dinner meinkochbuch
$title ="index";
my_html_head ( $title );  

$name_der_db  = "chefkoch";
$benutzer     = "root";
$passwort     = "";
$tabellenname = "rezepte";

$link = our_sql_connect ( $server, $benutzer, $passwort, $name_der_db );
  
$username = "moeyskitchen";


print <<<EndOfHtml
<div style="text-align: center;">
  <p>  
    <h2>Prototype</h2><br>
    <p>First Version.</p><br>
  </p>
  </div>

  <!-- Slide Show -->

  <div class="slideshow-container">

   <!-- Full-width images with number and caption text -->
   <div class="mySlides fade">
     <div class="numbertext">1 / 3</div>
     <div style="text-align: center;">
       <object data="http://www.youtube.com/embed/PJvf5pF55cA"
       width="860" height="515"></object>
     </div>
   </div>

   
   <div class="mySlides fade">
     <div class="numbertext">2 / 3</div>
     <div style="text-align: center;">
       <object data="http://www.youtube.com/embed/M34tzv5ZMTA"
       width="860" height="515"></object>
     </div>
   </div>
 
   <div class="mySlides fade">
     <div class="numbertext">3 / 3</div>
     <img src="../../images/essen-teller-gerichte-quelle-fotolia-nitr.jpg" style="width:100%">
   </div>
 
   <!-- Next and previous buttons -->
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
 <br>
 
 <!-- The dots/circles -->
 <div style="text-align:center">
   <span class="dot" onclick="currentSlide(1)"></span>
   <span class="dot" onclick="currentSlide(2)"></span>
   <span class="dot" onclick="currentSlide(3)"></span>
 </div>

 <script src="../JavaScript/script.js"></script><br>
 <br>
  
EndOfHtml;




my_html_foot ( );
?>