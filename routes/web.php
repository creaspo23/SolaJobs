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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('pages.index');

Route::get('/dashbord', 'App\Http\Controllers\DashBordsController@index')->name('pages.dashbord.index');
Route::get('/dashbord/create', 'App\Http\Controllers\DashBordsController@create')->name('pages.dashbord.create');
Route::post('/dashbord', 'App\Http\Controllers\DashBordsController@store')->name('pages.dashbord.store');
Route::get('/dashbord/{company}', 'App\Http\Controllers\DashBordsController@show')->name('pages.dashbord.show');
Route::get('/dashbord/{company}/edit', 'App\Http\Controllers\DashBordsController@edit')->name('pages.dashbord.edit');
Route::patch('/dashbord/{company}', 'App\Http\Controllers\DashBordsController@update')->name('pages.dashbord.update');
Route::delete('/dashbord/{company}', 'App\Http\Controllers\DashBordsController@destroy')->name('pages.dashbord.destroy');



Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/search', function () {
    return view('Search_result');
});
