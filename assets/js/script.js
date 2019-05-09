 let userDrop = document.querySelector('.user-dropdown');
 let userMain = document.querySelector('.user-main');

userDrop.addEventListener("click", function() {
   
     userMain.classList.toggle('dropdown-visible');
} );


let playlistDrop = document.querySelector('.dropdown-toggle-playlist');
let playlistMain = document.querySelector('.dropdown-menu-playlist');

playlistDrop.addEventListener("click", function() {
     playlistMain.classList.toggle('dropdown-visible');
   
     

  
} );
