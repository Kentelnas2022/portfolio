// Function to show menu
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId);
    const nav = document.getElementById(navId);

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show');
        });
    }
};

// Initialize Typed.js for typing effect
var typed = new Typed(".multiple-text", {
    strings: ["' Life, like programming, is full of trial and error. '"],
    typeSpeed: 100,
    backDelay: 1000,
    loop: true
});

// Show menu function call
showMenu('nav-toggle', 'nav-menu');

// Remove menu mobile
const navLinks = document.querySelectorAll('.nav__link');

function linkAction() {
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.remove('show');
}
navLinks.forEach(n => n.addEventListener('click', linkAction));

// Scroll sections active link
const sections = document.querySelectorAll('section[id]');

function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50;
        const sectionId = current.getAttribute('id');

        const selectedNav = document.querySelector(`.nav__menu a[href*=${sectionId}]`);
        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            selectedNav.classList.add('active');
        } else {
            selectedNav.classList.remove('active');
        }
    });
}
window.addEventListener('scroll', scrollActive);

// Scroll reveal animation
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 200,
});

sr.reveal('.home__data, .about__img, .skills__subtitle, .skills__text', {});
sr.reveal('.home__img, .about__subtitle, .about__text, .skills__img', { delay: 400 });
sr.reveal('.home__social-icon', { interval: 200 });
sr.reveal('.skills__data, .work__img, .contact__input', { interval: 200 });
