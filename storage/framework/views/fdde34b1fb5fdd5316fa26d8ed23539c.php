<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', config('app.name', 'Ремонт квартир в Батайске | Отделочные работы | ЮгСтиль Батайск')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Ремонт квартир в Батайске под ключ, отделочные работы любой сложности. Профессиональный ремонт по доступным ценам с гарантией качества. Звоните: +7 904 448 2283'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', 'ремонт квартир, отделка, ремонтные работы, отделочные работы, ремонт квартир под ключ, ремонт квартир в Батайске, ремонт квартир в Ростове, услуги ремонта квартир'); ?>">
    
    <!-- Мета-тег для мобильных устройств - запрет автомасштабирования -->
    <meta name="format-detection" content="telephone=no">
    
    <!-- Канонический URL -->
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', config('app.name', 'Ремонт квартир в Батайске | Отделочные работы | ЮгСтиль Батайск')); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'Ремонт квартир в Батайске под ключ, отделочные работы любой сложности. Профессиональный ремонт по доступным ценам с гарантией качества.'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('meta_image', asset('images/og-image.webp')); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo e(url()->current()); ?>">
    <meta property="twitter:title" content="<?php echo $__env->yieldContent('title', config('app.name', 'Ремонт квартир в Батайске | Отделочные работы | ЮгСтиль Батайск')); ?>">
    <meta property="twitter:description" content="<?php echo $__env->yieldContent('meta_description', 'Ремонт квартир в Батайске под ключ, отделочные работы любой сложности. Профессиональный ремонт по доступным ценам с гарантией качества.'); ?>">
    <meta property="twitter:image" content="<?php echo $__env->yieldContent('meta_image', asset('images/og-image.webp')); ?>">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Roboto:400,500,700|Nunito" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
    <!-- Структурированные данные Schema.org -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "ЮгСтиль",
        "url": "<?php echo e(url('/')); ?>",
        "logo": "<?php echo e(asset('images/logo.png')); ?>",
        "description": "Ремонт квартир в Батайске и Ростове под ключ. Отделочные и ремонтные работы любой сложности.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+79044482283",
            "contactType": "customer service",
            "availableLanguage": ["Russian"]
        },
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Батайск",
            "addressRegion": "Ростовская область",
            "addressCountry": "RU"
        },
        "sameAs": [
            "https://www.facebook.com/stroybts",
            "https://www.instagram.com/stroybts.ru/",
            "https://vk.com/stroybts"
        ]
    }
    </script>
    
    <?php echo $__env->yieldContent('head_scripts'); ?>
</head>
<body>
    <div id="app">
        <!-- Пропуск навигации для пользователей скрин-ридеров -->
        <a href="#main-content" class="visually-hidden-focusable skip-link">Перейти к основному содержимому</a>
        
        <!-- Фиксированная кнопка вызова квиза для мобильных устройств -->
        <div class="mobile-quiz-btn d-md-none">
            <button type="button" class="btn btn-primary rounded-circle shadow open-quiz-modal" aria-label="Рассчитать стоимость ремонта" data-bs-toggle="tooltip" data-bs-placement="left" title="Рассчитать стоимость">
                <i class="bi bi-calculator" aria-hidden="true"></i>
            </button>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top" role="navigation" aria-label="Основная навигация">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" aria-label="На главную">
                    <span class="d-none d-md-inline">Ремонт квартир в Батайске</span>
                    <span class="d-md-none">ЮгСтиль</span>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Показать/скрыть меню">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link py-2" href="#services" data-bs-toggle="tooltip" title="Ознакомиться с услугами ремонта квартир">УСЛУГИ РЕМОНТА</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2" href="#portfolio" data-bs-toggle="tooltip" title="Посмотреть наши выполненные работы">НАШИ РАБОТЫ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2" href="#quiz" data-bs-toggle="tooltip" title="Узнать стоимость ремонта вашей квартиры">РАССЧИТАТЬ СТОИМОСТЬ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2" href="#testimonials" data-bs-toggle="tooltip" title="Прочитать отзывы наших клиентов">ОТЗЫВЫ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2" href="#contacts" data-bs-toggle="tooltip" title="Наши контактные данные">КОНТАКТЫ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main id="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        
        <footer class="py-5" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="text-uppercase fw-bold">ЮгСтиль Батайск</h4>
                        <p>Профессиональный ремонт квартир под ключ и отделочные работы в Батайске, Ростове-на-Дону и области.</p>
                        <div class="mt-3">
                            <a href="/uslugi-remonta-kvartir-v-batayske" class="text-decoration-none me-2">Услуги ремонта квартир</a>
                            <a href="/otdelochnye-raboty-bataysk" class="text-decoration-none me-2">Отделочные работы</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h4 class="text-uppercase fw-bold">Контакты</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-geo-alt-fill text-primary me-2"></i> Комсомольская улица, 133к1
Батайск, Ростовская область</li>
                            <li class="mb-2"><i class="bi bi-clock-fill text-primary me-2"></i> <?php echo e($contactInfo['working_hours']); ?></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase fw-bold">Навигация</h4>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="#services" class="d-block py-1">Ремонт квартир</a></li>
                                    <li><a href="#portfolio" class="d-block py-1">Отделочные работы</a></li>
                                    <li><a href="#quiz" class="d-block py-1">Рассчитать стоимость</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="#testimonials" class="d-block py-1">Отзывы</a></li>
                                    <li><a href="#contacts" class="d-block py-1">Контакты</a></li>
                                    <li><a href="/privacy-policy" class="d-block py-1">Политика конфиденциальности</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-3 border-top border-secondary">
                    <div class="col-12 text-center">
                        <p class="mb-0">&copy; <?php echo e(date('Y')); ?> ЮгСтиль Батайск - Ремонт квартир и отделочные работы. Все права защищены.</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Модальное окно с квизом -->
        <?php echo $__env->make('sections.quiz-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
    <!-- Контроль доступности -->
    <?php echo $__env->make('sections.accessibility-controls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('footer_scripts'); ?>
    
    <!-- Добавление скрипта для повышения доступности и мобильной адаптации -->
    <script>
        // Улучшение навигации с клавиатуры и мобильные оптимизации
        document.addEventListener('DOMContentLoaded', function() {
            // Инициализация tooltips на всех элементах с атрибутом data-bs-toggle="tooltip"
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl, {
                    trigger: 'hover focus',
                    boundary: 'window'
                });
            });
            
            // Добавление класса к навбару при прокрутке
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
            
            // Обработчик для фокусировки на элементах при навигации с клавиатуры
            const focusableElements = document.querySelectorAll(
                'a[href], button:not([disabled]), textarea:not([disabled]), input:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])'
            );
            
            focusableElements.forEach(element => {
                element.addEventListener('focus', function() {
                    this.classList.add('keyboard-focus');
                });
                
                element.addEventListener('blur', function() {
                    this.classList.remove('keyboard-focus');
                });
                
                // Проверка нажатия мыши для различения навигации мышью и клавиатурой
                element.addEventListener('mousedown', function() {
                    this.dataset.mouseDown = true;
                });
                
                element.addEventListener('focusin', function() {
                    if (!this.dataset.mouseDown) {
                        this.classList.add('keyboard-focus');
                    }
                    delete this.dataset.mouseDown;
                });
            });
            
            // Автоматическое закрытие навигационного меню при нажатии на ссылку на мобильных
            if (window.innerWidth < 992) {
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
                const navbarCollapse = document.getElementById('navbarSupportedContent');
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle: false});
                
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        bsCollapse.hide();
                    });
                });
            }
            
            // Улучшенная ленивая загрузка изображений
            if ('loading' in HTMLImageElement.prototype) {
                // Браузер поддерживает нативный lazy loading
                const images = document.querySelectorAll('img[loading="lazy"]');
                images.forEach(img => {
                    // Исправление путей к изображениям
                    if (img.src === 'undefined' || img.src === '' || img.src.includes('undefined')) {
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                        }
                    }
                    
                    // Добавляем обработчик ошибок для всех изображений
                    img.addEventListener('error', function() {
                        if (this.src !== '/img/placeholder.webp') {
                            this.src = '/img/placeholder.webp';
                        }
                    });
                });
            } else {
                // Fallback для браузеров, которые не поддерживают lazy loading
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                
                if ('IntersectionObserver' in window) {
                    const imageObserver = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const image = entry.target;
                                if (image.dataset.src) {
                                    image.src = image.dataset.src;
                                }
                                observer.unobserve(image);
                            }
                        });
                    });
                    
                    lazyImages.forEach(image => {
                        imageObserver.observe(image);
                    });
                } else {
                    // Fallback для старых браузеров без IntersectionObserver
                    const script = document.createElement('script');
                    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
                    document.body.appendChild(script);
                    
                    lazyImages.forEach(img => {
                        img.classList.add('lazyload');
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                        }
                    });
                }
            }
        });
    </script>

    <?php echo $__env->yieldContent('footer_scripts'); ?>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\stroybts\resources\views/layouts/app.blade.php ENDPATH**/ ?>