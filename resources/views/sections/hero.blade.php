<div class="hero-section position-relative overflow-hidden" role="banner">
    <div class="hero-video-container" aria-hidden="true">
        <video autoplay muted loop playsinline class="hero-bg-video">
            <source src="{{ asset('img/page.mp4') }}" type="video/mp4">
        </video>
    </div>
    
    <div class="container position-relative">
        <div class="row min-vh-100 align-items-center py-5">
            <div class="col-lg-7 hero-content" data-aos="fade-right">
                <div class="badge-container mb-3">
                    <span class="badge bg-white text-dark px-3 py-2 d-inline-block text-wrap">Ремонт квартир в Батайске и Ростове с 2013 года</span>
                </div>
                <h1 class="hero-title display-4 display-md-3 fw-bolder text-white mb-3">
                    Качественный <span class="text-primary hero-highlight">ремонт квартир</span> под ключ в Батайске
                </h1>
                <p class="lead text-white mb-4 fw-light">Выполняем отделочные работы в квартирах любой сложности с гарантией качества точно в срок. Разрабатываем дизайн-проекты и воплощаем их в реальность.</p>
                
                <div class="hero-cta d-flex flex-wrap gap-3 mb-4 mb-lg-5">
                    <a href="#" class="btn btn-primary fw-bold open-quiz-modal mb-2 mb-md-0" role="button" aria-haspopup="dialog" data-bs-toggle="tooltip" title="Рассчитать точную стоимость ремонта вашей квартиры">
                        <i class="bi bi-calculator me-2" aria-hidden="true"></i> Рассчитать стоимость
                    </a>
                </div>
                
                <div class="hero-stats d-flex flex-wrap" role="list">
                    <div class="hero-stat-item bg-white rounded-3 shadow-sm p-3 me-3 mb-3" role="listitem">
                        <h3 class="h5 mb-1 text-primary">10+ лет</h3>
                        <p class="mb-0 small" style="color:#000;">на рынке ремонта</p>
                    </div>
                    <div class="hero-stat-item bg-white rounded-3 shadow-sm p-3 me-3 mb-3" role="listitem">
                        <h3 class="h5 mb-1 text-primary">500+</h3>
                        <p class="mb-0 small" style="color:#000;">выполненных проектов</p>
                    </div>
                    <div class="hero-stat-item bg-white rounded-3 shadow-sm p-3 me-3 mb-3" role="listitem">
                        <h3 class="h5 mb-1 text-primary">до 3 лет</h3>
                        <p class="mb-0 small" style="color:#000;">гарантия на работы</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 d-none d-lg-block" data-aos="fade-up" aria-hidden="true">
                <div class="hero-image-grid position-relative">
                    <div class="hero-floating-card bg-white p-3 rounded-3 shadow-lg">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-shield-check text-primary" style="font-size: 2rem; color:#000;"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0" style="color:#000;">Гарантия 3 года</h5>
                                <p class="mb-0" style="color:#000;">на все виды ремонтных работ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="hero-scroll-down text-center position-absolute bottom-0 start-50 translate-middle-x pb-4 d-none d-md-block">
            <a href="#advantages" class="text-white" aria-label="Прокрутить к разделу 'Преимущества'">
                <div class="d-flex flex-column align-items-center">
                    <span>Узнать больше</span>
                    <i class="bi bi-chevron-down bounce" aria-hidden="true"></i>
                </div>
            </a>
        </div>
    </div>
    
    <div class="hero-brands py-3 py-md-4 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <p class="text-muted mb-3 small">Выполняем отделочные работы в квартирах Батайска и Ростова-на-Дону:</p>
                    <div class="d-flex flex-wrap justify-content-center align-items-center gap-2 gap-md-4" role="list">
                        <span class="badge bg-light text-dark p-2 mb-2" role="listitem">Ремонт квартир под ключ</span>
                        <span class="badge bg-light text-dark p-2 mb-2" role="listitem">Отделочные работы</span>
                        <span class="badge bg-light text-dark p-2 mb-2" role="listitem">Ремонт 1-комнатных квартир</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Мобильные стили для Hero секции */
@media (max-width: 767.98px) {
    .hero-section {
        height: auto;
    }
    
    .hero-video-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }
    
    .hero-bg-video {
        object-fit: cover;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    
    .hero-content {
        padding: 3rem 0;
        z-index: 1;
    }
    
    .hero-title {
        font-size: 1.8rem;
        line-height: 1.3;
    }
    
    .hero-cta {
        flex-direction: column;
        padding: 20px
    }
    
    .hero-cta .btn {
        width: 100%;
        margin-bottom: 0.5rem;
    }
    
    .hero-stats {
        justify-content: center;
    }
    
    .hero-stats .hero-stat-item {
        flex: 0 0 calc(50% - 1rem);
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        text-align: center;
    }
    
    .hero-brands {
        padding: 1rem 0;
    }
    
    .hero-brands .badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem !important;
    }
}

/* Стили для средних устройств */
@media (min-width: 768px) and (max-width: 991.98px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-stats {
        justify-content: flex-start;
    }
}

/* Анимация для стрелки прокрутки */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

.bounce {
    animation: bounce 2s infinite;
}
</style>
