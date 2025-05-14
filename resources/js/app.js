import './bootstrap';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap; // Делаем bootstrap доступным глобально

// Импортируем Swiper и его стили
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
// Делаем Swiper глобально доступным
window.Swiper = Swiper;

// Мобильная адаптация и работа с интерфейсом
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация всех тултипов
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            trigger: 'hover focus' // Не показываем тултипы на мобильных устройствах при тапе
        });
    });

    // Инициализация всех слайдеров
    initSliders();

    // Обработка форм
    setupFormValidation();

    // Настройка поведения квиза
    setupQuiz();

    // Плавная прокрутка для якорных ссылок
    setupSmoothScroll();
    
    // Переключение шагов в квизе по кнопкам
    setupQuizNavigation();
    
    // Адаптация изображений для ретина-дисплеев
    setupRetinaImages();
    
    // Обработка нажатий для модальных окон
    setupModalHandlers();
    
    // Настройка доступности для клавиатурной навигации
    setupKeyboardAccessibility();
    
    // Оптимизация для телефонов - большие области нажатия
    if (window.innerWidth < 768) {
        setupMobileTapAreas();
    }
    
    // Функция для очистки модальных окон при загрузке страницы
    function checkAndClearModals() {
        // Проверяем, есть ли лишние backdrops
        const backdrops = document.querySelectorAll('.modal-backdrop');
        if (backdrops.length > 0) {
            backdrops.forEach(el => el.remove());
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        }
    }
    
    // Очистка модалок при загрузке страницы
    checkAndClearModals();
    
    // Добавляем глобальный обработчик кликов вне модальных окон
    document.addEventListener('click', function(e) {
        // Если клик был по backdrop
        if (e.target.classList.contains('modal-backdrop')) {
            checkAndClearModals();
        }
    });
});

// Инициализация всех слайдеров Swiper на странице
function initSliders() {
    // Слайдер услуг
    if (document.querySelector('.services-swiper')) {
        new Swiper('.services-swiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // когда ширина экрана >= 576px
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // когда ширина экрана >= 992px
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                // когда ширина экрана >= 1200px
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    }

    // Слайдер портфолио проектов
    if (document.querySelector('.portfolio-swiper')) {
        new Swiper('.portfolio-swiper', {
            slidesPerView: 1,
            spaceBetween: 15,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // когда ширина экрана >= 576px
                576: {
                    slidesPerView: 1,
                },
                // когда ширина экрана >= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // когда ширина экрана >= 992px
                992: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }
        });
    }
    
    // Проверяем и инициализируем другие слайдеры
    document.querySelectorAll('.swiper').forEach(sliderElement => {
        if (!sliderElement.swiper && 
            !sliderElement.classList.contains('services-swiper') && 
            !sliderElement.classList.contains('portfolio-swiper')) {
            
            // Базовая инициализация для остальных слайдеров
            new Swiper(sliderElement, {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                pagination: {
                    el: sliderElement.querySelector('.swiper-pagination'),
                    clickable: true,
                },
                navigation: {
                    nextEl: sliderElement.querySelector('.swiper-button-next'),
                    prevEl: sliderElement.querySelector('.swiper-button-prev'),
                },
                breakpoints: {
                    576: { slidesPerView: 1 },
                    768: { slidesPerView: 2, spaceBetween: 20 },
                    992: { slidesPerView: 3, spaceBetween: 20 }
                }
            });
        }
    });
}

// Настройка валидации форм
function setupFormValidation() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
}

// Настройка навигации в квизе
function setupQuizNavigation() {
    // Получаем ссылки на кнопки "Далее" и "Назад"
    const nextButtons = document.querySelectorAll('.next-step');
    const prevButtons = document.querySelectorAll('.prev-step');
    
    // Добавляем обработчик для кнопок "Далее"
    nextButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.closest('.quiz-step');
            const currentStepNum = parseInt(currentStep.dataset.step);
            
            // Валидация текущего шага
            const inputs = currentStep.querySelectorAll('input[required], select[required], textarea[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (!isValid) return;
            
            // Скрываем текущий шаг и показываем следующий
            currentStep.classList.remove('active');
            const nextStep = document.querySelector(`.quiz-step[data-step="${currentStepNum + 1}"]`);
            if (nextStep) nextStep.classList.add('active');
            
            // Обновляем изображение в боковой панели (если оно есть)
            const quizImageContainer = document.querySelector('.quiz-image-container');
            if (quizImageContainer) {
                const currentImage = quizImageContainer.querySelector(`.quiz-step-image.active`);
                if (currentImage) currentImage.classList.remove('active');
                
                const nextImage = quizImageContainer.querySelector(`.quiz-step-image[data-step="${currentStepNum + 1}"]`);
                if (nextImage) nextImage.classList.add('active');
            }
        });
    });
    
    // Добавляем обработчик для кнопок "Назад"
    prevButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.closest('.quiz-step');
            const currentStepNum = parseInt(currentStep.dataset.step);
            
            // Скрываем текущий шаг и показываем предыдущий
            currentStep.classList.remove('active');
            const prevStep = document.querySelector(`.quiz-step[data-step="${currentStepNum - 1}"]`);
            if (prevStep) prevStep.classList.add('active');
            
            // Обновляем изображение в боковой панели
            const quizImageContainer = document.querySelector('.quiz-image-container');
            if (quizImageContainer) {
                const currentImage = quizImageContainer.querySelector(`.quiz-step-image.active`);
                if (currentImage) currentImage.classList.remove('active');
                
                const prevImage = quizImageContainer.querySelector(`.quiz-step-image[data-step="${currentStepNum - 1}"]`);
                if (prevImage) prevImage.classList.add('active');
            }
        });
    });
}

// Настройка работы квиза
function setupQuiz() {
    // Обработка отправки формы квиза
    const quizForm = document.getElementById('quiz-form');
    if (quizForm) {
        quizForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(quizForm);
            
            // Отправка данных через AJAX
            fetch('/quiz/submit', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Показываем экран успешной отправки
                    const quizSteps = document.querySelectorAll('.quiz-step');
                    quizSteps.forEach(step => step.classList.remove('active'));
                    
                    const quizResult = document.querySelector('.quiz-result');
                    quizResult.classList.remove('d-none');
                    
                    // Редирект через 3 секунды (если указан URL)
                    if (data.redirect) {
                        setTimeout(function() {
                            window.location.href = data.redirect;
                        }, 3000);
                    }
                } else {
                    alert('Произошла ошибка при отправке формы. Пожалуйста, попробуйте еще раз.');
                }
            })
            .catch(error => {
                console.error('Ошибка:', error);
                alert('Произошла ошибка при отправке формы. Пожалуйста, попробуйте еще раз.');
            });
        });
    }
    
    // Открытие квиза из разных кнопок на странице
    const quizButtons = document.querySelectorAll('.open-quiz-modal');
    if (quizButtons.length > 0) {
        quizButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const quizModal = new bootstrap.Modal(document.getElementById('quizModal'));
                quizModal.show();
            });
        });
    }
}

// Плавная прокрутка для якорных ссылок
function setupSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            // Пропускаем обработку, если это не якорная ссылка
            if (this.getAttribute('href') === '#' || 
                this.getAttribute('href').startsWith('#carousel') ||
                this.getAttribute('data-bs-toggle')) return;
                
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Вычисляем позицию элемента с учетом высоты шапки
                const headerHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Закрываем мобильное меню, если оно открыто
                const navbarCollapse = document.getElementById('navbarSupportedContent');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) bsCollapse.hide();
                }
                
                // Обновляем URL с новым якорем
                history.pushState(null, null, targetId);
            }
        });
    });
}

// Адаптация изображений для ретина-дисплеев
function setupRetinaImages() {
    if (window.devicePixelRatio > 1) {
        const images = document.querySelectorAll('img[data-retina]');
        images.forEach(img => {
            img.src = img.getAttribute('data-retina');
        });
    }
}

// Обработка модальных окон
function setupModalHandlers() {
    // Сброс состояния модальных форм при закрытии
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
        modal.addEventListener('hidden.bs.modal', function() {
            const forms = this.querySelectorAll('form');
            forms.forEach(form => {
                form.reset();
                form.classList.remove('was-validated');
            });
            
            // Сброс квиза к первому шагу
            const quizSteps = this.querySelectorAll('.quiz-step');
            quizSteps.forEach((step, index) => {
                step.classList.remove('active');
                if (index === 0) step.classList.add('active');
            });
            
            const quizResult = this.querySelector('.quiz-result');
            if (quizResult) quizResult.classList.add('d-none');
            
            // Сброс активного изображения в боковой панели
            const quizImages = this.querySelectorAll('.quiz-step-image');
            quizImages.forEach((img, index) => {
                img.classList.remove('active');
                if (index === 0) img.classList.add('active');
            });
        });
    });
}

// Настройка доступности для клавиатурной навигации
function setupKeyboardAccessibility() {
    // Ловушка фокуса для модальных окон
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
        modal.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                const focusableElements = modal.querySelectorAll(
                    'button:not([disabled]), [href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
                );
                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];
                
                if (e.shiftKey) {
                    if (document.activeElement === firstElement) {
                        lastElement.focus();
                        e.preventDefault();
                    }
                } else {
                    if (document.activeElement === lastElement) {
                        firstElement.focus();
                        e.preventDefault();
                    }
                }
            }
        });
    });
}

// Оптимизация для телефонов - увеличенные области нажатия
function setupMobileTapAreas() {
    // Увеличиваем область для кликабельных элементов
    document.querySelectorAll('.nav-link, .btn, .card-link').forEach(el => {
        el.style.padding = '0.75rem';
        el.style.minHeight = '44px'; // Минимальный размер для удобного нажатия
    });
    
    // Добавляем отступы для элементов управления формы
    document.querySelectorAll('input, select, textarea').forEach(el => {
        el.style.padding = '0.75rem';
        el.style.minHeight = '44px';
    });
}

// Функция для проверки и исправления путей к изображениям
function fixImagePaths() {
    // Находим все изображения на странице
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        // Проверяем, есть ли у изображения путь undefined или пустой путь
        if (img.getAttribute('src') === 'undefined' || img.getAttribute('src') === '') {
            // Устанавливаем резервный путь или путь из data-атрибута, если есть
            if (img.dataset.src) {
                img.src = img.dataset.src;
            } else {
                // Если нет data-src, используем запасное изображение
                img.src = '/img/placeholder.webp';
                console.warn('Изображение с неопределенным источником:', img);
            }
        }
        
        // Проверяем, правильно ли работает lazy loading
        if (img.loading === 'lazy') {
            // Убедимся, что у изображения есть height и width для предотвращения сдвигов макета
            if (!img.hasAttribute('width') && !img.hasAttribute('height')) {
                // Можно задать размеры по умолчанию, если они не указаны
                img.setAttribute('width', 'auto');
                img.setAttribute('height', 'auto');
            }
            
            // Добавим обработку ошибок загрузки
            img.addEventListener('error', function() {
                this.src = '/img/placeholder.webp';
            });
        }
    });
}

// Запускаем функцию после загрузки DOM и при изменении контента (например, при загрузке через AJAX)
document.addEventListener('DOMContentLoaded', fixImagePaths);

// Обработка динамически добавляемых изображений
const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        if (mutation.addedNodes.length) {
            fixImagePaths();
        }
    });
});

// Запускаем наблюдение за изменениями в DOM
document.addEventListener('DOMContentLoaded', () => {
    observer.observe(document.body, { childList: true, subtree: true });
});

// Дополнительная функция для проверки и исправления путей в слайдерах
document.addEventListener('DOMContentLoaded', function() {
    // Исправление проблем со слайдерами
    if (typeof Swiper !== 'undefined') {
        const swipers = document.querySelectorAll('.swiper');
        swipers.forEach(swiperElement => {
            swiperElement.addEventListener('swiper', function(e) {
                const swiper = e.detail[0];
                // Исправляем пути к изображениям при инициализации слайдера
                const slideImages = swiper.el.querySelectorAll('img');
                slideImages.forEach(fixImageIfNeeded);
                
                // Также исправляем при смене слайда
                swiper.on('slideChange', function() {
                    const slideImages = swiper.el.querySelectorAll('img');
                    slideImages.forEach(fixImageIfNeeded);
                });
            });
        });
    }
});

// Вспомогательная функция для исправления путей к изображениям
function fixImageIfNeeded(img) {
    if (img.getAttribute('src') === 'undefined' || img.getAttribute('src') === '') {
        if (img.dataset.src) {
            img.src = img.dataset.src;
        } else {
            img.src = '/img/placeholder.webp';
        }
    }
}
