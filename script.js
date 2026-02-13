// Initialize Lucide Icons
lucide.createIcons();

// Initialize Lenis Smooth Scroll
const lenis = new Lenis();
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Header Scroll Effect
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('header--scrolled');
    } else {
        header.classList.remove('header--scrolled');
    }
});

// GSAP Animations Base
gsap.registerPlugin(ScrollTrigger);

// Animation for footer columns
gsap.from('.footer__col', {
    scrollTrigger: {
        trigger: '.footer',
        start: 'top 80%',
    },
    opacity: 0,
    y: 30,
    duration: 0.8,
    stagger: 0.2,
    ease: 'power3.out'
});