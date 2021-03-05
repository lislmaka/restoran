<?php

use App\Http\Controllers\Frontend\DishController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/dishes', [DishController::class, 'index'])->name('dishes.index');

// Pages routes
Route::get('/{page_category}/{page_info?}', [PageController::class, 'index'])->name('pages.index');

// 404
Route::fallback(function () {
    abort(404);
});
