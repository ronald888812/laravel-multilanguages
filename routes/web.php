<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LocalizationController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::resource('/product', ProductController::class);

 Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');
 
Route::group(['middleware' => ['web']], function () {
	
	Route::get('/lang/{lang}', [App\Http\Controllers\LanguageController::class,'switchLang'])->name('lang.switch');

});

