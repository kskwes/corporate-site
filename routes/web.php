<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/corporate', 'App\Http\Controllers\IndexPageController@index')->name('home');

Route::get('/corporate/service', 'App\Http\Controllers\ServicePageController@show')->name('service');

Route::get('/corporate/news{id?}', 'App\Http\Controllers\NewsPageController@show')->name('news');

Route::get('/corporate/company', 'App\Http\Controllers\CompanyPageController@show')->name('company');

Route::get('/corporate/works{id?}', 'App\Http\Controllers\WorksPageController@show')->name('works');

Route::get('scss', function () {
    return view('for-scss');
});
