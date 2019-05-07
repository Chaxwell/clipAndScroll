<?php

if (isset($_SESSION["userId"])) {

  echo '
   
    <header>
        <div class="logo">
          <img class="logo user-dropdown" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png">
        </div>

        <h1 class="connecte-titre">ClipAndScroll</h1>

        <nav>
           <a class="upload" href="../pages/clip-upload.php">upload</a>
                       <a class="user-dropdown" href="#">' . $_SESSION['nickname'] . '</a> 

           
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
        <h1>ClipAndScroll</h1>
        <nav>
        ';
  require($path . "/partials/connexion-inscription.php");
  echo '

    
     </nav>
    </header>
    
    ';
}
