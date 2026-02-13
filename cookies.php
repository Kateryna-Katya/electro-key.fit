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
<main>
    <section class="pages section-padding">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h1 class="section-title">Политика использования <span class="text-gradient">файлов cookie</span></h1>
                <p class="section-subtitle">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie.
                </p>
            </div>

            <div class="legal-content" data-aos="fade-up" data-aos-delay="200">
                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой текстовый файл, который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                    Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                    (например, выбор языка, настройки региона <strong>Франция</strong> и другие параметры) 
                    в течение определенного времени, чтобы вам не приходилось вводить их повторно.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
                </p>
                <ul>
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования сайта. Они позволяют вам
                        перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать базовые возможности.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Собирают анонимную информацию о том, как посетители
                        используют наш сайт, помогая нам улучшать контент нашего IT-блога.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для предоставления более
                        персонализированного опыта в рамках услуг по разработке AI-ассистентов.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для доставки материалов, соответствующих вашим интересам.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <p>Основные цели использования файлов cookie в проекте <strong><?= $domainTitle ?></strong>:</p>
                <ul>
                    <li>Обеспечение стабильной и безопасной работы платформы.</li>
                    <li>Анализ поведения пользователей для оптимизации структуры нашего блога.</li>
                    <li>Персонализация инструментов для удобства пользователей в <strong>Европе</strong>.</li>
                    <li>Предоставление релевантных кейсов и обновлений о разработке ботов.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой момент изменить настройки в браузере. 
                    Однако, обратите внимание: отключение строго необходимых cookie может привести к некорректной работе 
                    некоторых функций нашего сайта.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На страницах <strong><?= $domainTitle ?></strong> мы используем современные библиотеки для визуализации, 
                    такие как <strong>Three.js</strong>, и аналитические сервисы (например, Google Analytics). 
                    Мы рекомендуем вам ознакомиться с политиками конфиденциальности этих провайдеров.
                </p>

                <h2>Контактная информация</h2>
                <p>
                    Если у вас возникли вопросы касательно нашей политики использования файлов cookie на 
                    <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+33189480032">+33 1 89 48 00 32</a><br>
                    <strong>Адрес:</strong> 12 Rue de la Paix, 75002 Paris, France
                </p>
            </div>
        </div>
    </section>
</main>

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