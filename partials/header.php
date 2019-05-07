<?php

if (isset($_SESSION["userId"])) {

    echo '
   
    <header>
        <div class="logo">
          <img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png">
        </div>

        <h1 class="connecte-titre">clipAndScroll</h1>

        <nav>
           <a class="upload" href="../pages/clip-upload.php">upload</a>
                       <a class="deconnexion" href="partials/processing/deconnexion.php"> Déconnexion </a> 

           <a class="MyChannel" href="pages/channel.php"> '.$_SESSION['nickname'].'</a>
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
        <h1>clipAndScroll</h1>
        <nav>
        ' ;
        include ("partials/connexion-inscription.php");  
       echo '

    
     </nav>
    </header>
    
    ';
}
?>
