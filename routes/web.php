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
use App\Http\Controllers\Profile\StatusController;
use App\Http\Controllers\Profile\OrdersController;
use App\Http\Controllers\Profile\FavoriteController;
use App\Http\Controllers\Profile\BallsController;
use App\Http\Controllers\Profile\NotificationsController;
use App\Http\Controllers\Profile\EventController;
use App\Http\Controllers\Profile\StockController;
use App\Http\Controllers\Profile\DonatController;
use App\Http\Controllers\Profile\HistoryController;
use App\Http\Controllers\Profile\OfferController;
use App\Http\Controllers\Profile\PolicyController;
use App\Http\Controllers\Profile\SettingsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\SettingController;

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
Auth::routes();
Route::get('/set-city/{id}', [CityController::class, 'setCity'])->name('set.city');

Route::middleware(['isUserCity'])->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->name('home');
    Route::get('/product/{id}', [CatalogController::class, 'product']);
    Route::get('/{id}', [CatalogController::class, 'category'])->where('id', '[0-9]+');

    Route::get('/additionally', [AdditionallyController::class, 'index']);
    Route::get('/additionally/product/{id}', [AditionalyController::class, 'product']);
    Route::get('/additionally/{id}', [AdditionallyController::class, 'category']);

    Route::get('/constructor', [ConstructorController::class, 'index']);
    Route::get('/constructor/{id}', [ConstructorController::class, 'category']);

    Route::get('/urgently', [UrgentlyController::class, 'index']);

    //NEWS
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{id}', [NewsController::class, 'single'])->name('news.single');
    //QUIZ
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');

    //ACCOUNT
    Route::group(['prefix' => 'account', 'middleware' => ['profileCheck']], function(){
        Route::get('/', [StatusController::class, 'index'])->name('profile.index');
        Route::get('/orders', [OrdersController::class, 'index'])->name('profile.orders');
        Route::get('/favorite', [FavoriteController::class, 'index'])->name('profile.favorite');
        Route::get('/balls', [BallsController::class, 'index'])->name('profile.balls');
        Route::get('/notifications', [NotificationsController::class, 'index'])->name('profile.notifications');
        Route::get('/events', [EventController::class, 'index'])->name('profile.event');
        Route::get('/stock', [StockController::class, 'index'])->name('profile.stock');
        Route::get('/donat', [DonatController::class, 'index'])->name('profile.donat');
        Route::get('/history', [HistoryController::class, 'index'])->name('profile.history');
        Route::get('/offer', [OfferController::class, 'index'])->name('profile.offer');
        Route::get('/policy', [PolicyController::class, 'index'])->name('profile.policy');
        Route::get('/settings', [SettingsController::class, 'index'])->name('profile.settings');
        //EDIT
        Route::post('/settings', [SettingsController::class, 'edit'])->name('profile.edit');
    });

    //ADMIN ROUTS
    Route::group(['prefix' => 'admin','middleware' => ['role:admin']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
        Route::resource('admin_news', AdminNewsController::class);
        Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
        Route::post('/settings', [SettingController::class, 'min_order'])->name('admin.settings.min.order');
        Route::post('/settings/add-who', [SettingController::class, 'add_who'])->name('admin.settings.add.who');
        Route::post('/settings/update/block', [SettingController::class, 'block_update'])->name('admin.settings.block.update');
        Route::post('/settings/delete/block', [SettingController::class, 'block_delete'])->name('admin.settings.block.delete');
    });

    //ABOUT US
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    //CONTACT
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

    //Public offer
    Route::get('/offer', [OffersController::class, 'offer'])->name('offer');
    Route::get('/policy', [OffersController::class, 'policy'])->name('policy');

});

Route::get('/order', [OrderController::class, 'index']);


// /city Добавить модалку города
//     CityController
//     /city/index.blade.php
// / переделать на всплывающее окно выбор города
// /catalog переделать в /
//     Банеры могут открывать категории, продукты (в модальном окне), урлы
//     За доп деньги сделать возможность настроки для регионов.
//     Типа вы не говорили что надо.
//     А мы так же через path сделаем, быстро и красиво
//     ShopController
//     /shop/index.blade.php
//     /shop/cat.blade.php
//     /shop/product.blade.php
// /constructor
// /quiz
// /urgently
// /aditionaly


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
