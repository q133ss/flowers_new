<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ConstructorController;
use App\Http\Controllers\AdditionallyController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UrgentlyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\NewsController;
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

Route::get('/city', [CityController::class, 'index'])->name('city');

Route::get('/set-city/{id}', [CityController::class, 'setCity'])->name('set.city');

Route::middleware(['isUserCity'])->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('home');
    Route::get('/product/{id}', [CatalogController::class, 'product']);
    Route::get('/{id}', [CatalogController::class, 'category']);

    Route::get('/additionally', [AdditionallyController::class, 'index']);
    Route::get('/additionally/product/{id}', [AditionalyController::class, 'product']);
    Route::get('/additionally/{id}', [AdditionallyController::class, 'category']);

    Route::get('/constructor', [ConstructorController::class, 'index']);
    Route::get('/constructor/{id}', [ConstructorController::class, 'category']);

    Route::get('/quiz', [QuizController::class, 'index']);
    Route::get('/urgently', [UrgentlyController::class, 'index']);

    //NEWS
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
});

Route::get('/order', [OrderController::class, 'index']);


// /city Добавить модалку города
//     CityController
//     /city/city.blade.php
// / переделать на всплывающее окно выбор города
// /catalog переделать в /
//     Банеры могут открывать категории, продукты (в модальном окне), урлы
//     За доп деньги сделать возможность настроки для регионов.
//     Типа вы не говорили что надо.
//     А мы так же через path сделаем, быстро и красиво
//     ShopController
//     /shop/city.blade.php
//     /shop/cat.blade.php
//     /shop/product.blade.php
// /constructor
// /quiz
// /urgently
// /aditionaly

