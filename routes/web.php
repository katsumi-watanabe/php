<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


Route::get('tests/test', 'App\HTTP\Controllers\TestController@index');

Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
    Route::get('index', 'App\HTTP\Controllers\ContactFormController@index')->name('contact.index');
    Route::get('create', 'App\HTTP\Controllers\ContactFormController@create')->name('contact.create');
    Route::post('store', 'App\HTTP\Controllers\ContactFormController@store')->name('contact.store');
    // Route::get('index', 'App\HTTP\Controllers\ContactFormController@index')->name('contact.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'HomeController@index'])->name('home');
