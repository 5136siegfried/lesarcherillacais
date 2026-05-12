(function() {
  'use strict';

  // Burger menu
  const burger = document.querySelector('.lai-nav__burger');
  const menu   = document.querySelector('.lai-nav__menu');
  if (burger && menu) {
    burger.addEventListener('click', function() {
      const open = menu.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', open);
    });
  }

  // Sous-menus mobile — toggle au clic
  const parents = document.querySelectorAll('.lai-nav__list .menu-item-has-children > a');
  parents.forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const submenu = this.nextElementSibling;
        if (submenu) submenu.classList.toggle('is-open');
      }
    });
  });
})();