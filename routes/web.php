<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

// Агрессивная переадресация на HTTPS в production
if (App::environment('production')) {
    URL::forceScheme('https');
    
    // Перенаправление с HTTP на HTTPS
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
        // Проверка на прокси-серверы
        if (!isset($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] !== 'https') {
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit;
        }
    }
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');
Route::get('/thank-you', [QuizController::class, 'thankYou'])->name('thank-you');

// SEO маршруты
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
