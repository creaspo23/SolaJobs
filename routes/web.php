<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\ApplyController;
use App\Models\Job;
use GuzzleHttp\Middleware;
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

Route::get('dashbord/register', [AdminRegisterController::class, 'showRegisterForm'])->name('admin.register-form');
Route::post('dashbord/register', [AdminRegisterController::class, 'register'])->name('admin.register');

Route::get('dashbord/login', [AdminController::class, 'showLoginForm'])->name('admin.login-form');
Route::post('dashbord/login', [AdminController::class, 'login'])->name('admin.login');

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('pages.master');


Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashbord', 'App\Http\Controllers\DashBordsController@index')->name('pages.dashbord.index');
    Route::get('/dashbord/create', 'App\Http\Controllers\DashBordsController@create')->name('pages.dashbord.create');
    Route::post('/dashbord', 'App\Http\Controllers\DashBordsController@store')->name('pages.dashbord.store');
    Route::get('/dashbord/{company}', 'App\Http\Controllers\DashBordsController@show')->name('pages.dashbord.show');
    Route::get('/dashbord/{company}/edit', 'App\Http\Controllers\DashBordsController@edit')->name('pages.dashbord.edit');
    Route::patch('/dashbord/{company}', 'App\Http\Controllers\DashBordsController@update')->name('pages.dashbord.update');
    Route::delete('/dashbord/{company}', 'App\Http\Controllers\DashBordsController@destroy')->name('pages.dashbord.destroy');
    Route::get('/invoice/{company}', 'App\Http\Controllers\InvoiceController@show');
    Route::post('/dashbord/{company}/jobs', 'App\Http\Controllers\CompanyJobsController@store');
});


Route::resource('pages/dashbord', 'DashBordsController')->middleware('auth');


Route::get('/home', function () {
    return view('home');
});


Route::get('/auth/register', 'App\Http\Controllers\RegistrationController@create')->name('register.create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store')->name('register');

Route::get('/auth/login', 'App\Http\Controllers\SessionsController@create')->name('auth.login');
Route::post('/login', 'App\Http\Controllers\SessionsController@store')->name('login');

Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy')->name('auth.logout');


Route::get('/search', function () {
    $jobs = Job::latest()->get();
    return view('Search_result', [
        'jobs' => $jobs,
    ]);
});

Route::get('/apply/{id}', function ($id) {
    return view('request', [
        'job_id' => $id,
    ]);
})->name('apply');

Route::post('/applies', [ApplyController::class, 'store'])->name('applies.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
