<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Разработка AI-ассистентов и чат-ботов
    </title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%236366f1%22/><path d=%22M30 50 L50 30 L70 50 L50 70 Z%22 fill=%22white%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="content">

        <header class="header">
            <div class="container header__container">
                <a href="./#hero" class="header__logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <nav class="header__nav">
                    <ul class="header__menu">
                        <li><a href="./#hero" class="header__link">Главная</a></li>
                        <li><a href="./#solutions" class="header__link">Решения</a></li>
                        <li><a href="./#process" class="header__link">Процесс</a></li>
                        <li><a href="./#blog" class="header__link">Блог</a></li>
                        <li><a href="./#reviews" class="header__link">Отзывы</a></li>
                    </ul>
                </nav>
                <div class="header__actions">
                    <a href="./#contact" class="btn btn--primary">Связаться</a>
                    <button class="header__burger" aria-label="Menu">
                        <span></span>
                    </button>
                </div>
            </div>
        </header>


        <footer class="footer">
            <div class="container footer__container">
                <div class="footer__col">
                    <a href="./#hero" class="footer__logo">
                        <span class="logo__text">
                            <?= $domainTitle ?>
                        </span>
                    </a>
                    <p class="footer__description">
                        Инновационные AI-инструменты для реальных задач. Технологии, которые работают на вас, от простых
                        чатов до сложных экосистем.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#solutions">Решения</a></li>
                        <li><a href="./#process">Процесс</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./terms.php">Terms of Use</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./return.php">Refund Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+33189480032">+33 1 89 48 00 32</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>12 Rue de la Paix, 75002 Paris, France</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container footer__bottom">
                <p>&copy; 2026
                    <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
                </p>
            </div>
        </footer>
<div class="mobile-menu">
    <div class="mobile-menu__inner">
        <button class="mobile-menu__close"><i data-lucide="x"></i></button>
        <nav class="mobile-menu__nav">
            <ul class="mobile-menu__list">
                <li><a href="./#hero" class="mobile-menu__link">Главная</a></li>
                <li><a href="./#solutions" class="mobile-menu__link">Решения</a></li>
                <li><a href="./#process" class="mobile-menu__link">Процесс</a></li>
                <li><a href="./#blog" class="mobile-menu__link">Блог</a></li>
                <li><a href="./#reviews" class="mobile-menu__link">Отзывы</a></li>
                <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
            </ul>
        </nav>
    </div>
</div>

<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--primary btn--sm">Принять</button>
    </div>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="script.js"></script>
</body>

</html>