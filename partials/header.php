<?php

if (isset($_SESSION["userId"])) {

  echo '
   
    <header>
        <div class="logo">
          <a href="/index.php"><img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png"></a>
        </div>

        <h1 class="connecte-titre">ClipAndScroll</h1>

        <nav>
        
           <a class="upload" href="../pages/clip-upload.php">upload</a>
                       <a class="user-dropdown" href="#">' . $_SESSION['nickname'] . '</a> 
  <div class="user-main">
  <a href="/partials/processing/deconnexion.php">déconnexion</a>
  </div>
          <a class="channel" href="#">My channel</a> 
       </nav>
    </header>
    
    ';
}

if (!isset($_SESSION['userId'])) {
  echo '
   
    <header>
     <div class="logo">
             <img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png">
        </div>

        <h1 class="titre-pas-co">ClipAndScroll</h1>
        
        <nav>
        ';
  require($path . "/partials/connexion-inscription.php");
  echo '

    
     </nav>
    </header>
    
    ';
}
