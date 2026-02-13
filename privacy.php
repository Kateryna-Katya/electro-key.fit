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
                <h1 class="section-title">Политика <span class="text-gradient">конфиденциальности</span></h1>
                <p class="section-subtitle">
                    Мы ценим ваше доверие и обеспечиваем высочайший уровень защиты данных при использовании платформы <?= $domainTitle ?>.
                </p>
            </div>

            <div class="legal-content" data-aos="fade-up" data-aos-delay="200">
                <p>
                    Настоящая Политика распространяется на персональные данные, предоставляемые клиентами 
                    <strong><?= $domainTitle ?></strong> как для получения услуг по разработке AI-ассистентов, 
                    так и для взаимодействия с контентом нашего блога, участия в экспертных программах, 
                    получения технической поддержки и информационного сопровождения.
                </p>

                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в действующие положения. 
                    Новые редакции имеют приоритет над текущими. Наши ресурсы могут содержать ссылки на сторонние сайты 
                    со своей политикой приватности, за которую <strong><?= $domainTitle ?></strong> не несет ответственности. 
                    Предоставляя свои данные, вы даете полное согласие на их обработку способами, описанными ниже.
                </p>

                <h2>Порядок сбора, хранения и уничтожения данных</h2>
                <p>
                    Мы собираем данные исключительно для предоставления качественных услуг: доступа к платформе обучения, 
                    разработки чат-ботов и внедрения инноваций в ваш бизнес. Для защиты информации используются 
                    современные протоколы шифрования и стандарты безопасности ЕС.
                </p>

                <p>
                    Максимальный срок хранения данных составляет 75 лет, либо до момента официального отзыва согласия 
                    пользователем или прекращения деятельности компании. Уничтожение или обезличивание данных 
                    проводится при достижении целей обработки или по вашему запросу.
                </p>

                <h2>Категории собираемой информации:</h2>
                
                <h3>Техническая информация:</h3>
                <ul>
                    <li>время доступа и IP-адрес;</li>
                    <li>источники перехода на ресурс <strong><?= $fullDomain ?></strong>;</li>
                    <li>посещенные страницы и просмотры информационных блоков;</li>
                    <li>сведения о типе браузера и операционной системы;</li>
                    <li>номер телефона (при совершении звонка по указанным на сайте контактам).</li>
                </ul>

                <h3>Персонализация и аутентификация:</h3>
                <p>При заполнении форм обратной связи мы собираем:</p>
                <ul>
                    <li>имя пользователя;</li>
                    <li>E-mail и номер телефона для оперативной связи и консультаций по AI-решениям.</li>
                </ul>

                <h2>Информация о действиях пользователя:</h2>
                <ul>
                    <li>данные о соглашениях на разработку ботов между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                    <li>детали запросов, отправленных через формы на сайте;</li>
                    <li>сведения о полученных технических консультациях и внедренных алгоритмах;</li>
                    <li>произведенные платежи и финансовая информация в рамках законодательства <strong>Франции</strong> и ЕС.</li>
                </ul>

                <h2>Цели обработки персональных данных:</h2>
                <ul>
                    <li>предоставление услуг по автоматизации и доступа к базе знаний блога;</li>
                    <li>учет пожеланий пользователей при проектировании новых AI-ассистентов;</li>
                    <li>информирование о технологических обновлениях, кейсах и инновациях через e-mail;</li>
                    <li>обеспечение экспертной поддержки на всех этапах запуска проекта.</li>
                </ul>

                <h2>Передача данных третьим лицам:</h2>
                <p><strong><?= $domainTitle ?></strong> не передает ваши данные третьим лицам, за исключением случаев:</p>
                <ul>
                    <li>получения вашего прямого согласия;</li>
                    <li>требования компетентных органов <strong>Франции</strong> в соответствии с законом;</li>
                    <li>стратегического слияния или поглощения компании.</li>
                </ul>

                <h2>Использование файлов cookie</h2>
                <p>
                    Cookies позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона 
                    <strong>Франция</strong>). Это делает взаимодействие с <strong><?= $fullDomain ?></strong> более эффективным. 
                    Вы можете отключить Cookies в настройках своего браузера в любое время.
                </p>

                <h2>Ваши права</h2>
                <p>
                    Чтобы отредактировать свои данные или полностью прекратить их обработку в соответствии с GDPR, 
                    пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                    <a href="mailto:hello@<?= $fullDomain ?>" class="text-gradient" style="font-weight: 700;">hello@<?= $fullDomain ?></a>.
                </p>

                <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                    <p style="font-size: 0.9rem; opacity: 0.7;">Актуально на: Февраль 2026. Регион: Франция.</p>
                </div>
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