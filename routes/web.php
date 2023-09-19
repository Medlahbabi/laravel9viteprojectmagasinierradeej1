<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Magasinier\ArticleController;
use App\Http\Controllers\Admin\Chef_service\Demande_de_sortieController;
use App\Http\Controllers\Chef_service\Chef_serviceController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Magasinier\MagasinierController;
use App\Htt\Controllers\Magasinier\LivrerController;
use App\Http\Controllers\Magasinier\Preparation_panierController;
use App\Http\Controllers\Magasinier\Pret_livrerController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/articles', ArticleController::class);
    Route::resource('/demande_de_sorties', Demande_de_sortieController::class);
});
Route::middleware(['auth', 'chef_service'])->name('chef_service.')->prefix('chef_service')->group(function () {
    Route::get('/', [Chef_serviceController::class, 'index'])->name('index');
    Route::resource('/demande_de_sorties', Demande_de_sortieController::class);
});
Route::middleware(['auth', 'magasinier'])->name('magasinier.')->prefix('magasinier')->group(function () {
    Route::get('/', [MagasinierController::class, 'index'])->name('index');
    Route::resource('/articles', ArticleController::class);
    Route::resource('/livrers',LivrerController::class);
    Route::resource('/prepration_paniers',Preparation_panierController::class);
    Route::resource('/pret_livrers',Pret_livrerController::class);
});
require __DIR__.'/auth.php';
