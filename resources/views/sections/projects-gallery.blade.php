<div id="projects-gallery" class="projects-gallery py-5">
    <div class="text-center mb-4">
        <h2 class="section-title">Примеры ремонта квартир в Батайске</h2>
        <p class="lead">Фотографии наших выполненных работ по ремонту и отделке квартир</p>
    </div>
    
    <!-- Слайдер для Современный стиль -->
    <div class="style-section mb-5">
        <div class="container">
            <h3 class="style-heading mb-4">Стиль 1</h3>
        </div>
        <div class="swiper style1-swiper">
            <div class="swiper-wrapper">
                @php
                    $style1Files = glob(public_path('img/style/1/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
                @endphp
                
                @foreach($style1Files as $file)
                    <div class="swiper-slide">
                        <div class="project-slide">
                            <img src="{{ asset('img/style/1/'.basename($file)) }}" 
                                alt="Ремонт квартиры в современном стиле в Батайске" 
                                class="img-fluid"
                                loading="lazy">
                            
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Добавляем элементы управления слайдером с tooltips -->
            <div class="swiper-button-next" data-bs-toggle="tooltip" title="Следующий слайд"></div>
            <div class="swiper-button-prev" data-bs-toggle="tooltip" title="Предыдущий слайд"></div>
            <div class="swiper-pagination style1-pagination"></div>
        </div>
    </div>
    
    <!-- Слайдер для Классический стиль -->
    <div class="style-section mb-5">
        <div class="container">
            <h3 class="style-heading mb-4">Стиль 2</h3>
        </div>
        <div class="swiper style2-swiper">
            <div class="swiper-wrapper">
                @php
                    $style2Files = glob(public_path('img/style/2/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
                @endphp
                
                @foreach($style2Files as $file)
                    <div class="swiper-slide">
                        <div class="project-slide">
                            <img src="{{ asset('img/style/2/'.basename($file)) }}" 
                                alt="Ремонт квартиры в классическом стиле в Батайске" 
                                class="img-fluid"
                                loading="lazy">
                          
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="swiper-pagination style2-pagination"></div>
            <div class="swiper-button-next style2-next"></div>
            <div class="swiper-button-prev style2-prev"></div>
        </div>
    </div>
    
    <!-- Слайдер для Минималистичный стиль -->
    <div class="style-section">
        <div class="container">
            <h3 class="style-heading mb-4">Стиль 3</h3>
        </div>
        <div class="swiper style3-swiper">
            <div class="swiper-wrapper">
                @php
                    $style3Files = glob(public_path('img/style/3/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
                @endphp
                
                @foreach($style3Files as $file)
                    <div class="swiper-slide">
                        <div class="project-slide">
                            <img src="{{ asset('img/style/3/'.basename($file)) }}" 
                                alt="Ремонт квартиры в минималистичном стиле в Батайске" 
                                class="img-fluid"
                                loading="lazy">
                           
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="swiper-pagination style3-pagination"></div>
            <div class="swiper-button-next style3-next"></div>
            <div class="swiper-button-prev style3-prev"></div>
        </div>
    </div>
</div>

<style>
    .style-section {
        position: relative;
        overflow: hidden;
    }
    
    .style-heading {
        font-weight: 700;
        border-left: 4px solid var(--primary);
        padding-left: 15px;
    }
    
    .style1-swiper,
    .style2-swiper,
    .style3-swiper {
        width: 100%;
        height: auto;
        padding-bottom: 40px;
    }
    
    .project-slide {
        position: relative;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .project-slide img {
        width: 100%;
        aspect-ratio: 4/3;
        object-fit: cover;
    }
    
    .project-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
        color: white;
        padding: 20px;
    }
    
    .project-caption h4 {
        font-size: 1.8rem;
        margin-bottom: 5px;
    }
    
    .project-caption p {
        font-size: 1.1rem;
        opacity: 0.8;
        margin-bottom: 10px;
    }
    
    @media (max-width: 768px) {
        .style1-swiper,
        .style2-swiper,
        .style3-swiper {
            height: 40vh;
        }
        
        .project-caption h4 {
            font-size: 1.4rem;
        }
    }
</style>

<!-- Загрузка Swiper через CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Общая конфигурация для всех слайдеров
    const swiperConfig = {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // когда ширина экрана >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // когда ширина экрана >= 576px
            576: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            // когда ширина экрана >= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            // когда ширина экрана >= 992px
            992: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }
    };
    
    // Инициализация слайдера для Современный стиль
    try {
        const style1Swiper = new Swiper('.style1-swiper', {
            ...swiperConfig,
            pagination: {
                el: '.style1-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.style1-next',
                prevEl: '.style1-prev',
            },
        });
        console.log('Современный стиль слайдер инициализирован');
    } catch (error) {
        console.error('Ошибка инициализации современный стиль слайдера:', error);
    }
    
    // Инициализация слайдера для Классический стиль
    try {
        const style2Swiper = new Swiper('.style2-swiper', {
            ...swiperConfig,
            pagination: {
                el: '.style2-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.style2-next',
                prevEl: '.style2-prev',
            },
        });
        console.log('Классический стиль слайдер инициализирован');
    } catch (error) {
        console.error('Ошибка инициализации классический стиль слайдера:', error);
    }
    
    // Инициализация слайдера для Минималистичный стиль
    try {
        const style3Swiper = new Swiper('.style3-swiper', {
            ...swiperConfig,
            pagination: {
                el: '.style3-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.style3-next',
                prevEl: '.style3-prev',
            },
        });
        console.log('Минималистичный стиль слайдер инициализирован');
    } catch (error) {
        console.error('Ошибка инициализации минималистичный стиль слайдера:', error);
    }
});
</script>
