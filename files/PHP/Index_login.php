<!DOCTYPE html>

<?php

    if (isset($_POST["submitted"])) {
    sucheverarbeiten();
}

function sucheverarbeiten()
{
    if (isset($_POST["rezeptname"])) {
        $rezeptname = $_POST["rezeptname"];
    } else {
        $rezeptname = "";
    }

    header("Location: results.php?rezeptname=" . $rezeptname);
}

?>

  <head>
    <title>Chefkoch</title>
    <link rel="stylesheet" href="../CSS/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>

  <body>
 
  <div class="menu-bar">
    <div class="logo">
      <img src="../../images/chefkoch-logo_1-1-30.png" alt="" width="120" height="65"/>
      </div>
    <ul>
      <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Startseite</a></li>
      <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i>Rezepte</a>
        <div class="sub-menu-1">
          <ul>
            <li class="hover-me"><a href="#">Rezepte finden</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu-2">
                <ul>
                <li><a href="#">Kategorien</a></li>
                <li><a href="#">Rezept eingeben</a></li>
                </ul>
              </div>   
              <li class="hover-me"><a href="#">Empfehlungen</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu-2">
                 <ul>
                 <li><a href="#">Wochenplan</a></li>
                 <li><a href="#">Was koche ich heute?</a></li>
                 <li><a href="#">Was backe ich heute?</a></li>
                 <li><a href="#">Rezeptsammlungen</a></li>
                 </ul>
               </div>   
               <li class="hover-me"><a href="#">Neue Rezepte</a><i class="fa fa-angle-right"></i>
                <div class="sub-menu-2">
                   <ul>
                   <li><a href="#">Rezept des Tages</a></li>
                   <li><a href="#">Neue Rezeptbilder</a></li>
                   <li><a href="#">Zufallsrezept</a></li>
                   </ul>
                 </div>
              <li class="hover-me"><a href="#">Schritt-für-Schritt-Anleitungen</a><i class="fa fa-angle-right"></i>
                <div class="sub-menu-2">
                    <ul>
                    <li><a href="#">Vorspeisen & Salate</a></li>
                    <li><a href="#">Hauptgerichte</a></li>
                    <li><a href="#">Backen & Süßes</a></li>
                    </ul>
                </div>
          </ul>
        </div>
      </li>
      <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Magazin</a>
        <div class="sub-menu-1">
          <ul>
            <li class="hover-me"><a href="#">Magazin Übersicht</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu-2">
                  <ul>
                  <li><a href="#">Unsere Top-Rezepte</a></li>
                  <li><a href="#">Alltagsküche</a></li>
                  <li><a href="#">Winterküche</a></li>
                  <li><a href="#">Länderküche</a></li>
                  <li><a href="#">Backen</a></li>
                  <li><a href="#">Vegetarisch & Vegan</a></li>
                  <li><a href="#">Low Carb & Ernährung</a></li>
                  <li><a href="#">Trends</a></li>
                  <li><a href="#">Gast & Gastgeber</a></li>
                  <li><a href="#">Über den Tellerand</a></li>
                  <li><a href="#">Fleisch & Fisch</a></li>
                  <li><a href="#">Chefkoch Blog</a></li>
                  </ul>
              </div>
            <li class="hover-me"><a href="#">Aktuelles</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu-2">
                <ul>
                <li><a href="#">Stay at Home and Cook</a></li>
                </ul>
              </div>       
            </li>
            <li class="hover-me"><a href="#">Die Redaktion empfiehlt</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu-2">
                <ul>
                <li><a href="#">Küchengeräte im Vergleich</a></li>
                <li><a href="#">Eintöpfe und Suppen: Jetzt was Warmes!</a></li>
                <li><a href="#">Familienküche</a></li>
                </ul>
              </div>            
            </li>
            <li class="hover-me"><a href="#">Chefkoch Printmagazin</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu-2">
                <ul>
                <li><a href="#">Jetzt kennenlernen</a></li>
                <li><a href="#">Unsere Angebote</a></li>
                </ul>
              </div>            
            </li>
          </ul>
        </div>      
      </li>
      <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>Community</a>
        <div class="sub-menu-1">
          <ul>
            <li class="hover-me"><a href="#">Chefkoch Events</a> 
            <li class="hover-me"><a href="#">Foren</a><i class="fa fa-angle-right"></i>
              <div class="sub-menu-2">
                 <ul>
                 <li><a href="#">Kochen</a></li>
                 <li><a href="#">Backen</a></li>
                 <li><a href="#">Getränke</a></li>
                 <li><a href="#">Sonstige Kochthemen</a></li>
                 <li><a href="#">Lifestyle</a></li>
                 <li><a href="#">Plauderecke</a></li>
                 <li><a href="#">Chefkoch informiert</a></li>
                 <li><a href="#">Forenmoderatoren</a></li>
                 <li><a href="#">Forensuche</a></li>
                 <li><a href="#">Aktuelle Beiträge</a></li>
                 </ul>
               </div>   
               <li class="hover-me"><a href="#">Aktive User</a><i class="fa fa-angle-right"></i>
                <div class="sub-menu-2">
                   <ul>
                   <li><a href="#">Netiquette</a></li>
                   <li><a href="#">Chefkoch Gruppen</a></li>
                   </ul>
                 </div>
              <li class="hover-me"><a href="#">Fotoalben</a><i class="fa fa-angle-right"></i>
                <div class="sub-menu-2">
                    <ul>
                    <li><a href="#">Kochen & Rezepte</a></li>
                    <li><a href="#">Tiere</a></li>
                    <li><a href="#">Landschaft</a></li>
                    <li><a href="#">Menschen & Portrait</a></li>
                    </ul>
                </div>
          </ul>
        </div>
      </li>
      <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i>Videos</a>
        <div class="sub-menu-1">
            <ul>
                 <li><a href="../HTML/Lieblingsrezepte.html">Lieblingsrezepte</a></li>
                 <li><a href="#">Einfach lecker</a></li>
                 <li><a href="#">Rikes Backschule</a></li>
                 <li><a href="#">Fabios Kochschule</a></li>
                 <li><a href="#">Familienschätze</a></li>
                 <li><a href="#">Krasse Kost</a></li>
                 <li><a href="#">Brot backen</a></li>
                 <li><a href="#">Lunchdate</a></li>
                 <li><a href="#">How To: Küchenbasics</a></li>
                 <li><a href="#">Hack'n Roll</a></li>
                 <li><a href="#">Do it yourself: Deko & Co.</a></li>
            </ul>
        </div>
    </li>
      <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>Das perfekte Dinner</a></li>
      <li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i>Mein Kochbuch</a></li>
      <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
        <div class="sub-menu-1">
            <ul>
                 <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
      </li>
      
      <div class="search-container">
      <form class="example" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" placeholder="Suche" name="rezeptname">
        <button type="submit" name="submitted"><i class="fa fa-search"></i></button>
    </form>
      </div>
    </ul>
  </div>

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
      <img src="../../images/185270423-h-720.jpg" style="width:100%">
      <div class="text">Brotzeit</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="../../images/diese-restaurants-in-duesseldorf-bieten-euch-lieferdienst-take-away-1004772.jpg" style="width:100%">
      <div class="text">Burger</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="../../images/essen-teller-gerichte-quelle-fotolia-nitr.jpg" style="width:100%">
      <div class="text">Vitales Essen</div>
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

  <script src="../JavaScript/script.js"></script>




  </body>
</html>