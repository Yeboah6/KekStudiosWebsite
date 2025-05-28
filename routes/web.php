<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/contact', [MainController::class, 'contact']) -> name('contact');
Route::post('/send-mail', [MainController::class, 'sendMessage']) -> name('send.mail');

Route::get('/services', [MainController::class, 'services']) -> name('services');
Route::get('/about-us', [MainController::class, 'about']) -> name('about');
Route::get('/portfolio', [PortfolioController::class, 'portfolio']) -> name('portfolio');
Route::get('/our-ceo', [MainController::class, 'team']) -> name('our-team');
Route::get('/testimony', [MainController::class, 'testimony']) -> name('testimony');

Route::get('/services/{service}', [MainController::class, 'show'])->name('services.show')
->where('service', 'brand-identity-design|commercial-printing|web-mobile-applications|ui-ux-design|event-campaign-branding|creative-strategy-consulting|social-media-marketing');

Route::post('/services/{service}', [MainController::class, 'store'])->name('services.store')
->where('service', 'brand-identity-design|commercial-printing|web-mobile-applications|ui-ux-design|event-campaign-branding|creative-strategy-consulting|social-media-marketing');

Route::get('/booking/confirmation', [MainController::class, 'confirmation']) -> name('booking.confirmation');


// Admin Routes

Route::get('/admin/login', [AdminController::class, 'login']) -> name('admin.login');
Route::get('/admin/welcome-page', [AdminController::class, 'welcomePage']) -> name('admin.welcome-page');
Route::get('/admin/booking', [AdminController::class, 'Booking']) -> name('admin.booking');

//Customers
Route::get('/admin/customers/dashboard', [AdminController::class, 'CustomerDashboard']) -> name('admin.customers.dashboard');
Route::get('/admin/customers/clients', [AdminController::class, 'CustomerClients']) -> name('admin.customers.clients');
Route::get('/admin/customers/add-clients', [AdminController::class, 'AddClients']) -> name('admin.customers.add.clients');

// Projects
Route::get('/admin/projects/dashboard', [AdminController::class, 'ProjectDashboard']) -> name('admin.projects.dashboard');
Route::get('/admin/projects/projects', [AdminController::class, 'ProjectProjects']) -> name('admin.projects.projects');
Route::get('/admin/projects/add-projects', [AdminController::class, 'AddProjects']) -> name('admin.projects.add.projects');

// Payments
Route::get('/admin/payments/dashboard', [AdminController::class, 'PaymentDashboard']) -> name('admin.payments.dashboard');
Route::get('/admin/payments/payments', [AdminController::class, 'PaymentPayments']) -> name('admin.payments.payments');
