let userDrop = document.getElementsByClassName('user-dropdown');
console.log(userDrop);
userDrop.addEventListener("click", function() {
     userDrop.classList.toggle('dropdown-visible');
} );
