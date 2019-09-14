var picker = new Pikaday({ field: document.getElementById('datepicker') });

const menuLinks = document.querySelectorAll('.menu-link');



/* Menu Toggling */

menuLinks.forEach(function (menuLink) {

  menuLink.addEventListener('click', function (el) {

    /* Children [1] is the sublinks */
    this.nextElementSibling.classList.toggle('menu-sublinks--show');

  });
});
