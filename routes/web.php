<?php

use App\Http\Controllers\BanquetController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('banquet/{slug}', [BanquetController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
