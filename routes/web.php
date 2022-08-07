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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
\Illuminate\Support\Facades\Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/app', function () {
        return view('form');
    })->name('app');

    Route::get('/settings', [App\Http\Controllers\UserSettingsController::class, 'index']);
    Route::post('/settings', [App\Http\Controllers\UserSettingsController::class, 'update']);
});

Route::group(['middleware' => 'role:Admin'], function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/admin/requisites', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/admin/users/{id}', [App\Http\Controllers\AdminController::class, 'user']);
    Route::post('/admin/users/{id}', [App\Http\Controllers\AdminController::class, 'userUpdate']);
    Route::get('/admin/users/{id}/orders', [App\Http\Controllers\AdminController::class, 'userOrders']);
});

