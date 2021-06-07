<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
	Route::get('/lang/{lang}', [App\Http\Controllers\LanguageController::class,'switchLang'])->name('lang.switch');
});


Auth::routes();
Route::get('lang/{language}', [App\Http\Controllers\LocalizationController::class,'switch'])->name('localization.switch');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::resource('/product', ProductController::class);


