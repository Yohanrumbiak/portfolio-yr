<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminAuthController;


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

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout'); // Tambahkan ini
Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return redirect('/myportfolio');
});

Route::get('/myportfolio', function () {
    return view('myportfolio');
})->name('myportfolio');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/admin/messages', [ContactController::class, 'messages'])->name('admin.messages');
// Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.delete');

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin/messages', [ContactController::class, 'messages'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.delete');
    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

// Rute Darurat untuk Membersihkan Cache di Hosting InfinityFree
Route::get('/clear-hosting', function() {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return "🔥 Mantap! Semua cache lama di hosting berhasil dibersihkan!";
});

