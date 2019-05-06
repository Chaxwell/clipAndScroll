<?php
if (!isset($_SESSION["userId"])) {

    echo '
   
    <header>
    
    <nav>
    <div class="logo"></div>
      connecter
    <h1 class="connecte-titre">clipAndScroll
    </h1>
    <div class="logo"><img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png"></img></div>

<a class="upload">UPLOAD</a>
    </nav>
    </header>
    
    ';
}
if (isset($_SESSION["userId"])) {


    echo '
   
    <header>
    
    <nav>
    <div class="logo"><img class="logo" src="https://www.mtsac.edu/asac/images/temp_logo_testing.png"></img></div>
     pas connecter
    <h1>clipAndScroll
    </h1>
    
    </nav>
    </header>
    
    ';
}
?>
<header>
    <nav>Mes liens ici</nav>
</header>