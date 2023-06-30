<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class,'index'])->name('welcome');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::group(['prefix' => 'administrator-panel'], function () {
    Auth::routes(['register' => false]);
    Route::group(['prefix' => '/dashboard'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/chermet', [PriceController::class, 'chermet'])->name('admin.chermet');
        Route::post('/chermet/change/{id}', [PriceController::class, 'saveChermet'])->name('admin.chermet.change');
        Route::get('/cvetmet', [PriceController::class, 'cvetmet'])->name('admin.cvetmet');
        Route::post('/cvetmet/change/{id}', [PriceController::class, 'saveCvetmet'])->name('admin.cvetmet.change');
        Route::get('/faq', [PriceController::class, 'faq'])->name('admin.faq');
        Route::post('/faqs/change/{id}', [PriceController::class, 'saveFaqs'])->name('admin.faqs.change');
    });
});
