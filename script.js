document.addEventListener('DOMContentLoaded', function () {
    // Écoute l'événement de clic sur le bouton de menu
    var menuButton = document.getElementById('menuButton');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    if (menuButton && dropdownMenu) {
        menuButton.addEventListener('click', function () {
            // Toggle la visibilité du menu déroulant
            dropdownMenu.classList.toggle('show');
        });

        // Fermer le menu lorsqu'on clique en dehors
        document.addEventListener('click', function (event) {
            if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    }
});
