<?php

if (isset($_SESSION["userId"])) {

  echo '
   
    <header>
        <div class="logo">
          <a href="/index.php"><img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png"></a>
        </div>

        <h1 class="connecte-titre">ClipAndScroll</h1>

        <nav>
        <div class="btn-group dropleft">
           <a class="upload" href="../pages/clip-upload.php">upload</a>
           <button type="button" class="btn-channel btn btn-secondary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           ' . $_SESSION['nickname'] . '
  </button>
    
                       <div class="dropdown-menu">

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
