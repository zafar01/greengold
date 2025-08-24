<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\BlogController;
use App\Models\FAQ;

// Public routes
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('home');
});

Route::get('/faq', function () {
    $faqs = FAQ::where('status', 'active')->orderBy('order')->get();
    return view('faq', compact('faqs'));
})->name('faq');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes (protected by auth middleware)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Password change routes
    Route::get('/change-password', [AuthController::class, 'showChangePassword'])->name('change-password');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change-password.post');
    
    // Product management routes
    Route::resource('products', ProductController::class);
    
    // FAQ management routes
    Route::resource('faqs', FAQController::class);
    
    // Blog management routes
    Route::resource('blogs', BlogController::class);
});
