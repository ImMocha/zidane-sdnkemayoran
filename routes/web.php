<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;

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

// Public Routes
Route::get('/', function () {
    return view('LandingPage.beranda');
});

Route::get('/profil-sekolah', function () {
    return view('LandingPage.profil-sekolah');
});

Route::get('/berita', function () {
    $beritas = \App\Models\Berita::where('status', true)->latest()->paginate(9);
    return view('LandingPage.berita', compact('beritas'));
})->name('berita.index');

Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    
    // Dashboard Routes
    Route::get('/dashboard', function () {
        return view('Dashboard.index');
    })->name('dashboard');
    
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Admin Management Routes
    Route::get('/dashboard/users', [AdminController::class, 'index'])->name('dashboard.users.index');
    Route::post('/dashboard/users', [AdminController::class, 'store'])->name('dashboard.users.store');
    Route::get('/dashboard/users/{id}', [AdminController::class, 'show'])->name('dashboard.users.show');
    Route::put('/dashboard/users/{id}', [AdminController::class, 'update'])->name('dashboard.users.update');
    Route::delete('/dashboard/users/{id}', [AdminController::class, 'destroy'])->name('dashboard.users.destroy');
    
    // Berita Management Routes
    Route::get('/dashboard/beritas', [BeritaController::class, 'index'])->name('dashboard.beritas.index');
    Route::get('/dashboard/beritas/create', [BeritaController::class, 'create'])->name('dashboard.beritas.create');
    Route::post('/dashboard/beritas', [BeritaController::class, 'store'])->name('dashboard.beritas.store');
    Route::get('/dashboard/beritas/{id}/edit', [BeritaController::class, 'edit'])->name('dashboard.beritas.edit');
    Route::put('/dashboard/beritas/{id}', [BeritaController::class, 'update'])->name('dashboard.beritas.update');
    Route::delete('/dashboard/beritas/{id}', [BeritaController::class, 'destroy'])->name('dashboard.beritas.destroy');
    Route::post('/dashboard/beritas/upload', [BeritaController::class, 'uploadImage'])->name('dashboard.beritas.upload');
});
