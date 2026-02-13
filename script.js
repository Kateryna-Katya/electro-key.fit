document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Инициализация иконок Lucide
    lucide.createIcons();

    // 2. Плавный скролл Lenis
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 3. Мобильное меню
    const initMobileMenu = () => {
        const burger = document.querySelector('.header__burger');
        const closeBtn = document.querySelector('.mobile-menu__close');
        const menu = document.querySelector('.mobile-menu');
        const links = document.querySelectorAll('.mobile-menu__link');

        const toggleMenu = () => {
            menu.classList.toggle('mobile-menu--active');
            document.body.style.overflow = menu.classList.contains('mobile-menu--active') ? 'hidden' : '';
        };

        burger?.addEventListener('click', toggleMenu);
        closeBtn?.addEventListener('click', toggleMenu);
        links.forEach(link => link.addEventListener('click', toggleMenu));
    };

    // 4. Cookie Popup
    const initCookies = () => {
        const popup = document.getElementById('cookie-popup');
        const acceptBtn = document.getElementById('cookie-accept');

        if (!localStorage.getItem('cookies-accepted')) {
            setTimeout(() => popup?.classList.add('cookie-popup--show'), 3000);
        }

        acceptBtn?.addEventListener('click', () => {
            localStorage.setItem('cookies-accepted', 'true');
            popup?.classList.remove('cookie-popup--show');
        });
    };

    // 5. Контактная форма и капча
    const initForm = () => {
        const form = document.getElementById('ajax-form');
        const captchaLabel = document.getElementById('captcha-question');
        const captchaInput = document.getElementById('captcha-input');
        if (!form) return;

        let result;
        const gen = () => {
            const a = Math.floor(Math.random() * 10);
            const b = Math.floor(Math.random() * 10);
            result = a + b;
            captchaLabel.innerText = `${a} + ${b} = ?`;
        };
        gen();

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const success = document.getElementById('form-success');
            const error = document.getElementById('form-error');

            if (parseInt(captchaInput.value) !== result) {
                error.style.display = 'block';
                return;
            }

            const btn = form.querySelector('button');
            btn.innerText = "Отправка...";
            btn.disabled = true;

            setTimeout(() => {
                success.style.display = 'block';
                error.style.display = 'none';
                form.reset();
                btn.innerText = "Отправить запрос";
                btn.disabled = false;
                gen();
            }, 1500);
        });
    };

    // 6. Инициализация AOS (заменяет GSAP ScrollTrigger)
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });

    // 7. Запуск анимации Three.js (если функция определена)
    if (typeof initHeroScene === 'function') {
        initHeroScene();
    }

    initMobileMenu();
    initCookies();
    initForm();
});