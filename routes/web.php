<?php

use App\Models\Banner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BanquetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AmenitieController;
use App\Http\Controllers\FrontendController;

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
Route::post('submit-contact-form', [FrontendController::class, 'submit']);
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('banquet/{slug}', [BanquetController::class, 'show']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resources([
            'banners' => BannerController::class,
            'banquet' => BanquetController::class,
            'service' => ServiceController::class,
            'amenitie' => AmenitieController::class,
            'setting' => SettingController::class,
        ]);
    });
});
