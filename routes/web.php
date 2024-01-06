<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes d'authentification générées par Auth::routes()
Auth::routes();

// Routes pour l'authentification personnalisée
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Routes protégées par le middleware 'auth'
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return 'Welcome to the dashboard';
    })->name('dashboard');

    // Routes liées au panier
    Route::get('/shop', [CartController::class, 'showAddToCart'])->name('shop');
    Route::get('/order', [CartController::class, 'myOrder'])->name('myOrder');
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
    Route::get('/cart', [CartController::class, 'showCart'])->name('showCart');
    Route::post('/update-cart/{id}', [CartController::class, 'updateCart'])->name('updateCart');
    Route::post('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/show-add-to-cart', [CartController::class, 'showAddToCart'])->name('showAddToCart');
    

    // Routes du profil utilisateur
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
    Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
});

// Autres routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
