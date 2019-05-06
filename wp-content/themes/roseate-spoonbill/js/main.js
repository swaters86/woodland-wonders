'use strict';

(function () {
    function displayMenu() {
        let menu = document.getElementById('menu');
        menu.classList.toggle("hide");
    }
    let hamburgerBtn = document.querySelector('.wrapper .site-header button.hamburger');    
    hamburgerBtn.addEventListener('click', displayMenu);
})();