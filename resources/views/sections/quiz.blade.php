<div id="quiz" class="quiz-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title mb-2">Рассчитать стоимость проекта</h2>
                <p class="lead mb-5">Ответьте на несколько вопросов и получите точную оценку стоимости работ</п>
            </div>
        </div>
        <div class="quiz-container">
            <form id="quiz-form">
                <div class="quiz-step active" data-step="1">
                    <div class="mb-4">
                        <span class="badge bg-primary rounded-0 px-3 py-2">Шаг 1 из 4</span>
                        <h3 class="mt-3">Выберите тип помещения</h3>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-check card p-3 h-100">
                                <input class="form-check-input" type="radio" name="room_type" id="room_type1" value="apartment" required>
                                <label class="form-check-label w-100" for="room_type1">
                                    <div class="text-center mb-3">
                                        <i class="bi bi-house-door text-primary" style="font-size: 2.5rem;"></i>
                                    </div>
                                    <h4 class="h6 text-center">Квартира</h4>
                                    <p class="small text-muted mb-0 text-center">Дизайн и ремонт квартиры любого размера</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-check card p-3 h-100">
                                <input class="form-check-input" type="radio" name="room_type" id="room_type2" value="house">
                                <label class="form-check-label w-100" for="room_type2">
                                    <div class="text-center mb-3">
                                        <i class="bi bi-houses text-primary" style="font-size: 2.5rem;"></i>
                                    </div>
                                    <h4 class="h6 text-center">Частный дом</h4>
                                    <p class="small text-muted mb-0 text-center">Индивидуальные решения для загородных домов</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-check card p-3 h-100">
                                <input class="form-check-input" type="radio" name="room_type" id="room_type3" value="office">
                                <label class="form-check-label w-100" for="room_type3">
                                    <div class="text-center mb-3">
                                        <i class="bi bi-building text-primary" style="font-size: 2.5rem;"></i>
                                    </div>
                                    <h4 class="h6 text-center">Офис/Коммерческое</h4>
                                    <p class="small text-muted mb-0 text-center">Функциональные решения для бизнес-пространств</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-primary next-step">Далее <i class="bi bi-arrow-right ms-2"></i></button>
                    </div>
                </div>
                
                <div class="quiz-step" data-step="2">
                    <h3>Шаг 2: Площадь помещения</h3>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="area" id="area1" value="small" required>
                        <label class="form-check-label" for="area1">До 50 м²</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="area" id="area2" value="medium">
                        <label class="form-check-label" for="area2">50-100 м²</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="area" id="area3" value="large">
                        <label class="form-check-label" for="area3">Более 100 м²</label>
                    </div>
                    <button type="button" class="btn btn-secondary prev-step">Назад</button>
                    <button type="button" class="btn btn-primary next-step">Далее</button>
                </div>
                
                <div class="quiz-step" data-step="3">
                    <h3>Шаг 3: Тип ремонта</h3>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="repair_type" id="repair_type1" value="standard" required>
                        <label class="form-check-label" for="repair_type1">Стандартный</label>
                        <small class="form-text text-muted d-block">Качественный ремонт с использованием доступных материалов</small>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="repair_type" id="repair_type2" value="premium">
                        <label class="form-check-label" for="repair_type2">Премиум</label>
                        <small class="form-text text-muted d-block">Улучшенный ремонт с использованием материалов среднего ценового сегмента</small>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="repair_type" id="repair_type3" value="luxury">
                        <label class="form-check-label" for="repair_type3">Люкс</label>
                        <small class="form-text text-muted d-block">Эксклюзивный ремонт с использованием премиальных материалов</small>
                    </div>
                    <button type="button" class="btn btn-secondary prev-step">Назад</button>
                    <button type="button" class="btn btn-primary next-step">Далее</button>
                </div>
                
                <div class="quiz-step" data-step="4">
                    <h3>Шаг 4: Ваши контактные данные</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="privacy" name="privacy" required>
                        <label class="form-check-label" for="privacy">Я согласен с <a href="/privacy-policy">политикой конфиденциальности</a></label>
                    </div>
                    <button type="button" class="btn btn-secondary prev-step">Назад</button>
                    <button type="submit" class="btn btn-success">Получить расчет</button>
                </div>
                
                <div class="quiz-result d-none">
                    <div class="text-center">
                        <i class="bi bi-check-circle text-success" style="font-size: 3rem;"></i>
                        <h3 class="mt-3">Спасибо за заполнение анкеты!</h3>
                        <p>Мы свяжемся с вами в ближайшее время для предоставления детального расчета стоимости вашего проекта.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
