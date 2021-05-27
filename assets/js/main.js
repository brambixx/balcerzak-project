const navMobile = document.querySelector('.navbar__mobile')
    nav = document.querySelector('.navbar');
    navLinks = document.querySelector('.nav__links');

const expandMenu = () => {
    navMobile.classList.toggle('expanded');
    nav.classList.toggle('mobile_menu');
}

navMobile.addEventListener('click', expandMenu);
navLinks.addEventListener('click', () => {
    if (nav.classList.contains('mobile_menu') == true) {
        expandMenu();
    }
})
