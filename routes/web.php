<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']) -> name('home');
Route::get('/contact', [MainController::class, 'contact']) -> name('contact');
Route::get('/services', [MainController::class, 'services']) -> name('services');
Route::get('/about-us', [MainController::class, 'about']) -> name('about');
Route::get('/portfolio', [MainController::class, 'portfolio']) -> name('portfolio');
Route::get('/our-team', [MainController::class, 'team']) -> name('our-team');
Route::get('/testimony', [MainController::class, 'testimony']) -> name('testimony');

Route::get('/services/{service}', [MainController::class, 'show'])->name('services.show')
->where('service', 'brand-identity-design|commercial-printing|web-mobile-applications|ui-ux-design|event-campaign-branding|creative-strategy-consulting');
