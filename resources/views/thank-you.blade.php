@extends('layouts.app')

@section('title', 'Спасибо за заявку | Ремонт квартир в Батайске')
@section('meta_description', 'Благодарим за вашу заявку на расчет стоимости ремонта квартиры. Наши специалисты свяжутся с вами в ближайшее время для консультации.')

@section('content')
<div class="thank-you-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="card shadow-sm border-0 p-md-5 p-4">
                    <div class="card-body">
                        <div class="success-icon mb-4">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem;"></i>
                        </div>
                        <h1 class="h2 mb-3">Спасибо за вашу заявку!</h1>
                        <p class="lead mb-4">Мы получили ваше сообщение и скоро свяжемся с вами для обсуждения деталей.</p>
                        <div class="info-blocks row mb-4 g-3">
                            <div class="col-md-6">
                                <div class="bg-light rounded p-3 h-100">
                                    <h3 class="h5 text-primary mb-3"><i class="bi bi-telephone me-2"></i> Наш телефон</h3>
                                    <p class="mb-0"><a href="tel:{{ $contactInfo['phone']['raw'] }}" class="text-decoration-none fs-5">{{ $contactInfo['phone']['formatted'] }}</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light rounded p-3 h-100">
                                    <h3 class="h5 text-primary mb-3"><i class="bi bi-clock me-2"></i> Часы работы</h3>
                                    <p class="mb-0">{{ $contactInfo['working_hours'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="action-buttons">
                            <a href="{{ url('/') }}" class="btn btn-primary">Вернуться на главную</a>
                            <a href="tel:{{ $contactInfo['phone']['raw'] }}" class="btn btn-outline-dark ms-md-3 mt-3 mt-md-0">
                                <i class="bi bi-telephone-fill me-2"></i>Позвонить нам
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="what-next mt-5 pt-3">
                    <h2 class="h4 mb-4">Что будет дальше?</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="step-box">
                                <div class="step-number">1</div>
                                <h3 class="h5 mt-3">Звонок менеджера</h3>
                                <p class="small">Наш менеджер свяжется с вами в течение 2 часов</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="step-box">
                                <div class="step-number">2</div>
                                <h3 class="h5 mt-3">Бесплатный замер</h3>
                                <p class="small">Согласуем удобное время для замера помещения</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="step-box">
                                <div class="step-number">3</div>
                                <h3 class="h5 mt-3">Смета и договор</h3>
                                <p class="small">Подготовим детальную смету и заключим договор</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .thank-you-section {
        padding: 80px 0;
        min-height: 80vh;
        display: flex;
        align-items: center;
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        background-color: var(--bs-primary);
        color: white;
        font-weight: bold;
        text-align: center;
        margin: 0 auto;
    }
    
    .step-box {
        padding: 15px;
        height: 100%;
        border-radius: 8px;
        background-color: #f8f9fa;
        text-align: center;
    }
    
    @media (max-width: 767.98px) {
        .thank-you-section {
            padding: 40px 0;
        }
        
        .action-buttons .btn {
            display: block;
            width: 100%;
        }
    }
</style>
@endsection
