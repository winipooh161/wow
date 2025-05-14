<div class="modal fade" id="quizModal" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-sm-down" role="document">
        <div class="modal-content border-0">
            <div class="modal-header border-0 bg-primary text-white py-2">
                <h5 class="modal-title" id="quizModalLabel">Рассчитать стоимость ремонта</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Закрыть" data-bs-toggle="tooltip" title="Закрыть окно"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0">
                    <!-- Изображение слева (скрыто на мобильных) -->
                    <div class="col-md-4 d-none d-md-block">
                        <div class="quiz-image-container h-100" aria-hidden="true">
                            <div class="quiz-step-image active" data-step="1">
                                <img src="{{ asset('img/quiz/quiz-step1.webp') }}" alt="" class="img-fluid h-100 w-100 object-fit-cover">
                                <div class="image-overlay">
                                    <h3>Шаг 1</h3>
                                    <p>Выберите тип квартиры</p>
                                </div>
                            </div>
                            <div class="quiz-step-image" data-step="2">
                                <img src="{{ asset('img/quiz/quiz-step2.webp') }}" alt="Площадь помещения" class="img-fluid h-100 w-100 object-fit-cover">
                                <div class="image-overlay">
                                    <h3>Шаг 2</h3>
                                    <p>Укажите площадь помещения</p>
                                </div>
                            </div>
                            <div class="quiz-step-image" data-step="3">
                                <img src="{{ asset('img/quiz/quiz-step3.webp') }}" alt="Стиль интерьера" class="img-fluid h-100 w-100 object-fit-cover">
                                <div class="image-overlay">
                                    <h3>Шаг 3</h3>
                                    <p>Выберите стиль интерьера</p>
                                </div>
                            </div>
                            <div class="quiz-step-image" data-step="4">
                                <img src="{{ asset('img/quiz/quiz-step4.webp') }}" alt="Контактные данные" class="img-fluid h-100 w-100 object-fit-cover">
                                <div class="image-overlay">
                                    <h3>Шаг 4</h3>
                                    <p>Оставьте контактные данные</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Мобильный индикатор прогресса (виден только на мобильных) -->
                    <div class="d-md-none quiz-mobile-progress">
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between quiz-steps-indicator px-3 pt-1 pb-2">
                            <span class="quiz-step-dot active" data-step="1">1</span>
                            <span class="quiz-step-dot" data-step="2">2</span>
                            <span class="quiz-step-dot" data-step="3">3</span>
                            <span class="quiz-step-dot" data-step="4">4</span>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="quiz-container border-0 shadow-none p-md-4 p-2">
                            <form id="quiz-form" aria-live="polite">
                                <!-- Шаг 1 -->
                                <div class="quiz-step active" data-step="1" role="region" aria-labelledby="quiz-step1-title">
                                    <div class="mb-3">
                                        <span class="badge bg-primary rounded-0 px-3 py-2 d-none d-md-inline-block">Шаг 1 из 4</span>
                                        <h3 id="quiz-step1-title" class="mt-md-3 mt-2 h4 mobile-compact-heading">Выберите тип квартиры</h3>
                                    </div>
                                    
                                    <div class="row g-2">
                                        <div class="col-6 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="room_type" id="room_type1" value="apartment" required>
                                                <label class="form-check-label w-100" for="room_type1">
                                                    <div class="text-center mb-md-3 mb-1" aria-hidden="true">
                                                        <i class="bi bi-house-door text-primary quiz-icon-mobile"></i>
                                                    </div>
                                                    <h4 class="h6 mb-0 text-center mobile-option-text">Новостройка</h4>
                                                    <p class="small text-muted mb-0 text-center d-none d-md-block">Ремонт в новом доме с учетом усадки</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="room_type" id="room_type3" value="secondary">
                                                <label class="form-check-label w-100" for="room_type3">
                                                    <div class="text-center mb-md-3 mb-1">
                                                        <i class="bi bi-building text-primary quiz-icon-mobile"></i>
                                                    </div>
                                                    <h4 class="h6 mb-0 text-center mobile-option-text">Вторичка</h4>
                                                    <p class="small text-muted mb-0 text-center d-none d-md-block">Ремонт в квартирах на вторичном рынке</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-end mt-3 quiz-navigation">
                                        <button type="button" class="btn btn-primary next-step btn-mobile-adapt" data-bs-toggle="tooltip" title="Перейти к следующему шагу">Далее <span aria-hidden="true"><i class="bi bi-arrow-right ms-2"></i></span></button>
                                    </div>
                                </div>
                                
                                <!-- Шаг 2 -->
                                <div class="quiz-step" data-step="2">
                                    <div class="mb-3">
                                        <span class="badge bg-primary rounded-0 px-3 py-2 d-none d-md-inline-block">Шаг 2 из 4</span>
                                        <h3 class="mt-md-3 mt-2 h4 mobile-compact-heading">Площадь помещения</h3>
                                    </div>
                                    
                                    <div class="row g-2">
                                        <div class="col-4 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="area" id="area1" value="small" required>
                                                <label class="form-check-label w-100" for="area1">
                                                    <div class="text-center">
                                                        <span class="quiz-area-icon me-md-3">S</span>
                                                        <div class="mt-2">
                                                            <h4 class="h6 mb-1 mobile-option-text">До 50 м²</h4>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="area" id="area2" value="medium">
                                                <label class="form-check-label w-100" for="area2">
                                                    <div class="text-center">
                                                        <span class="quiz-area-icon me-md-3">M</span>
                                                        <div class="mt-2">
                                                            <h4 class="h6 mb-1 mobile-option-text">50-100 м²</h4>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="area" id="area3" value="large">
                                                <label class="form-check-label w-100" for="area3">
                                                    <div class="text-center">
                                                        <span class="quiz-area-icon me-md-3">L</span>
                                                        <div class="mt-2">
                                                            <h4 class="h6 mb-1 mobile-option-text">>100 м²</h4>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between mt-3 quiz-navigation">
                                        <button type="button" class="btn btn-outline-secondary prev-step btn-mobile-adapt" data-bs-toggle="tooltip" title="Вернуться к предыдущему шагу"><i class="bi bi-arrow-left me-2"></i> Назад</button>
                                        <button type="button" class="btn btn-primary next-step btn-mobile-adapt" data-bs-toggle="tooltip" title="Перейти к следующему шагу">Далее <i class="bi bi-arrow-right ms-2"></i></button>
                                    </div>
                                </div>
                                
                                <!-- Шаг 3 -->
                                <div class="quiz-step" data-step="3">
                                    <div class="mb-3">
                                        <span class="badge bg-primary rounded-0 px-3 py-2 d-none d-md-inline-block">Шаг 3 из 4</span>
                                        <h3 class="mt-md-3 mt-2 h4 mobile-compact-heading">Выберите стиль интерьера</h3>
                                    </div>
                                    
                                    <div class="row g-2">
                                        <div class="col-6 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="style_type" id="style_type1" value="style1" required>
                                                <label class="form-check-label w-100" for="style_type1">
                                                    <div class="style-preview mb-md-3 mb-1">
                                                        <img src="{{ asset('img/style/1/style_1.webp') }}" alt="Стиль 1" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="h6 mb-1 text-center mobile-option-text">Стиль 1</h4>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="style_type" id="style_type2" value="style2">
                                                <label class="form-check-label w-100" for="style_type2">
                                                    <div class="style-preview mb-md-3 mb-1">
                                                        <img src="{{ asset('img/style/2/style_2.webp') }}" alt="Стиль 2" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="h6 mb-1 text-center mobile-option-text">Стиль 2</h4>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="style_type" id="style_type3" value="style3">
                                                <label class="form-check-label w-100" for="style_type3">
                                                    <div class="style-preview mb-md-3 mb-1">
                                                        <img src="{{ asset('img/style/3/style_3.webp') }}" alt="Стиль 3" class="img-fluid rounded">
                                                    </div>
                                                    <h4 class="h6 mb-1 text-center mobile-option-text">Стиль 3</h4>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="form-check card p-md-3 p-2 h-100 mobile-card">
                                                <input class="form-check-input visually-hidden" type="radio" name="style_type" id="style_type4" value="other">
                                                <label class="form-check-label w-100" for="style_type4">
                                                    <div class="style-preview mb-md-3 mb-1 bg-light d-flex align-items-center justify-content-center" style="height: 80px;">
                                                        <i class="bi bi-palette2 text-primary quiz-icon-mobile"></i>
                                                    </div>
                                                    <h4 class="h6 mb-1 text-center mobile-option-text">Другой</h4>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between mt-3 quiz-navigation">
                                        <button type="button" class="btn btn-outline-secondary prev-step btn-mobile-adapt" data-bs-toggle="tooltip" title="Вернуться к предыдущему шагу"><i class="bi bi-arrow-left me-2"></i> Назад</button>
                                        <button type="button" class="btn btn-primary next-step btn-mobile-adapt" data-bs-toggle="tooltip" title="Перейти к следующему шагу">Далее <i class="bi bi-arrow-right ms-2"></i></button>
                                    </div>
                                </div>
                                
                                <!-- Шаг 4 -->
                                <div class="quiz-step" data-step="4">
                                    <div class="mb-3">
                                        <span class="badge bg-primary rounded-0 px-3 py-2 d-none d-md-inline-block">Шаг 4 из 4</span>
                                        <h3 class="mt-md-3 mt-2 h4 mobile-compact-heading">Ваши контактные данные</h3>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="name" class="form-label small">Имя</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label small">Телефон</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"><i class="bi bi-telephone text-primary"></i></span>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+7 (___) ___-__-__" required>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label small">Email (необязательно)</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"><i class="bi bi-envelope text-primary"></i></span>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="ваш@email.ru">
                                        </div>
                                    </div>
                                   
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="privacy" name="privacy" required>
                                        <label class="form-check-label small" for="privacy">Я согласен с <a href="/privacy-policy" target="_blank">политикой конфиденциальности</a></label>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between mt-3 quiz-navigation">
                                        <button type="button" class="btn btn-outline-secondary prev-step btn-mobile-adapt" data-bs-toggle="tooltip" title="Вернуться к предыдущему шагу"><i class="bi bi-arrow-left me-2"></i> Назад</button>
                                        <button type="submit" class="btn btn-primary btn-mobile-adapt" data-bs-toggle="tooltip" title="Отправить заявку и получить расчет">Получить расчет</button>
                                    </div>
                                    
                                    <!-- Кнопка быстрого звонка удалена -->
                                </div>
                                
                                <!-- Результат -->
                                <div class="quiz-result d-none" role="status" aria-live="assertive">
                                    <div class="text-center py-4">
                                        <i class="bi bi-check-circle text-success" style="font-size: 3rem;" aria-hidden="true"></i>
                                        <h3 class="mt-3">Спасибо за заявку!</h3>
                                        <p>Мы свяжемся с вами в ближайшее время для предоставления расчета.</p>
                                        <button type="button" class="btn btn-outline-primary mt-3" data-bs-dismiss="modal">Закрыть</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Скрипт для улучшения доступности модальных окон и квиза -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const quizModal = document.getElementById('quizModal');
    if (quizModal) {
        // Фокус на первый доступный элемент при открытии модального окна
        quizModal.addEventListener('shown.bs.modal', function() {
            const firstInput = this.querySelector('input:not([disabled]), button:not([disabled])');
            if (firstInput) {
                firstInput.focus();
            }
        });
        
        // Обработчик закрытия модального окна
        quizModal.addEventListener('hidden.bs.modal', function() {
            // Удаляем backdrop и класс modal-open
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
            
            // Сбросить форму при закрытии
            const form = document.getElementById('quiz-form');
            if (form) {
                form.reset();
            }
            
            // Возвращаемся к первому шагу
            const steps = document.querySelectorAll('.quiz-step');
            steps.forEach(step => step.classList.remove('active'));
            const firstStep = document.querySelector('.quiz-step[data-step="1"]');
            if (firstStep) {
                firstStep.classList.add('active');
            }

            // Сбросить прогресс
            updateMobileProgress(1);
        });
        
        // Обработчик нажатия ESC для очистки модальных окон
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && document.querySelector('.modal-backdrop')) {
                clearModalState();
            }
        });
        
        // Функция для принудительного удаления модального состояния
        function clearModalState() {
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        }
        
        // Обновление индикатора прогресса для мобильных устройств
        const updateMobileProgress = function(step) {
            const progressBar = document.querySelector('.quiz-mobile-progress .progress-bar');
            const stepDots = document.querySelectorAll('.quiz-step-dot');
            
            if (progressBar) {
                const progressPercent = (step / 4) * 100;
                progressBar.style.width = progressPercent + '%';
                progressBar.setAttribute('aria-valuenow', progressPercent);
            }
            
            if (stepDots && stepDots.length) {
                stepDots.forEach(dot => dot.classList.remove('active'));
                const activeDot = document.querySelector(`.quiz-step-dot[data-step="${step}"]`);
                if (activeDot) activeDot.classList.add('active');
            }
        };
        
        // Инициализация radio-кнопок с лучшей мобильной поддержкой
        const initRadioLabels = function() {
            const radioCards = document.querySelectorAll('.form-check.card');
            radioCards.forEach(card => {
                card.addEventListener('click', function() {
                    const radio = this.querySelector('input[type="radio"]');
                    if (radio) {
                        radio.checked = true;
                        // Визуальный эффект активного выбора для мобильных
                        radioCards.forEach(c => c.classList.remove('selected-card'));
                        this.classList.add('selected-card');
                    }
                });
            });
        };
        initRadioLabels();
        
        // Обработка переключения шагов квиза
        const nextButtons = quizModal.querySelectorAll('.next-step');
        const prevButtons = quizModal.querySelectorAll('.prev-step');
        
        nextButtons.forEach(button => {
            button.addEventListener('click', function() {
                const currentStep = this.closest('.quiz-step');
                const currentStepNum = parseInt(currentStep.dataset.step);
                const nextStepNum = currentStepNum + 1;
                const nextStep = quizModal.querySelector(`.quiz-step[data-step="${nextStepNum}"]`);
                
                if (nextStep) {
                    currentStep.classList.remove('active');
                    nextStep.classList.add('active');
                    updateMobileProgress(nextStepNum);
                    
                    // Прокрутка вверх на мобильных устройствах
                    if (window.innerWidth < 768) {
                        const modalBody = quizModal.querySelector('.modal-body');
                        if (modalBody) modalBody.scrollTop = 0;
                    }
                    
                    // Установка фокуса на следующем шаге
                    setTimeout(() => {
                        const firstField = nextStep.querySelector('input:not([disabled]), button:not([disabled])');
                        if (firstField) {
                            firstField.focus();
                        }
                    }, 100);
                }
            });
        });
        
        prevButtons.forEach(button => {
            button.addEventListener('click', function() {
                const currentStep = this.closest('.quiz-step');
                const currentStepNum = parseInt(currentStep.dataset.step);
                const prevStepNum = currentStepNum - 1;
                const prevStep = quizModal.querySelector(`.quiz-step[data-step="${prevStepNum}"]`);
                
                if (prevStep) {
                    currentStep.classList.remove('active');
                    prevStep.classList.add('active');
                    updateMobileProgress(prevStepNum);
                    
                    // Прокрутка вверх на мобильных устройствах
                    if (window.innerWidth < 768) {
                        const modalBody = quizModal.querySelector('.modal-body');
                        if (modalBody) modalBody.scrollTop = 0;
                    }
                    
                    // Установка фокуса на предыдущем шаге
                    setTimeout(() => {
                        const firstField = prevStep.querySelector('input:not([disabled]), button:not([disabled])');
                        if (firstField) {
                            firstField.focus();
                        }
                    }, 100);
                }
            });
        });
        
        // Обработка отправки формы
        const quizForm = document.getElementById('quiz-form');
        if (quizForm) {
            quizForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Показать результат
                const quizSteps = quizForm.querySelectorAll('.quiz-step');
                quizSteps.forEach(step => step.classList.remove('active'));
                
                const quizResult = quizForm.querySelector('.quiz-result');
                if (quizResult) {
                    quizResult.classList.remove('d-none');
                }
                
                // Здесь можно добавить AJAX отправку формы
                // ...
            });
        }
        
        // Инициализация начального состояния
        updateMobileProgress(1);
    }
    
    // Инициализация мобильной кнопки запуска квиза
    const mobileQuizBtns = document.querySelectorAll('.open-quiz-modal');
    if (mobileQuizBtns.length) {
        mobileQuizBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                // Проверяем и удаляем старый backdrop перед открытием нового окна
                clearModalState();
                const quizModal = new bootstrap.Modal(document.getElementById('quizModal'));
                quizModal.show();
            });
        });
    }
    
    // Глобальная функция для удаления модального состояния
    function clearModalState() {
        const backdrop = document.querySelector('.modal-backdrop');
        if (backdrop) {
            backdrop.remove();
        }
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
    }
    
    // Добавляем в window для доступа из других скриптов
    window.clearModalState = clearModalState;
});
</script>
