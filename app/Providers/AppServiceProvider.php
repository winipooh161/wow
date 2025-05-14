<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Передаем контактную информацию во все представления
        View::share('contactInfo', [
            'phone' => [
                'raw' => config('contact.phone.raw'),
                'formatted' => config('contact.phone.formatted')
            ],
            'email' => config('contact.email'),
            'address' => config('contact.address'),
            'working_hours' => config('contact.working_hours')
        ]);
    }
}
