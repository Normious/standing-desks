<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/rising-desks', [PageController::class, 'rising_desks'])->name('rising_desks');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('contact_us');
Route::get('/health-benefits', [PageController::class, 'health_benefits'])->name('health_benefits');

Route::get('/search', [PageController::class, 'search'])->name('search');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::middleware(['auth'])->group(function () {
  Route::get('/basket', [PageController::class, 'basket'])->name('basket');
});



require __DIR__.'/auth.php';
