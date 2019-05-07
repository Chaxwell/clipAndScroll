<?php
if (!isset($_SESSION["userId"])) {

    echo '
   
    <header>
        <div class="logo">
          <img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png"></img>
        </div>

        <h1 class="connecte-titre">clipAndScroll</h1>

        <nav>
           <a class="upload" href="../pages/clip-upload.php">upload</a>
        </nav>
    </header>
    
    ';
}

if (isset($_SESSION["userId"])) {
    echo '
   
    <header>
    
        <nav>
            <div class="logo">
             <img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png"></img>
        </div>
     
             <h1>clipAndScroll</h1>
    
     </nav>
    </header>
    
    ';
}
?>
