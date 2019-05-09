'use strict';

(function () {
    document.getElementById('hambuger-menu-toggle').addEventListener('click', function() {
        
        let menu = document.getElementById('menu');
        this.classList.toggle('collapsed-toggle-icon');
        menu.classList.toggle('js-expand-menu');
    });
})();