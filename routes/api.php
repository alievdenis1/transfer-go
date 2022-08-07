<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ContactFormsController;
use App\Http\Controllers\Api\v1\CurrenciesController;
use \App\Http\Controllers\Api\v1\CountriesController;
use \App\Http\Controllers\Api\v1\UserController;
use \App\Http\Controllers\Api\v1\OrderController;
use \App\Http\Controllers\Api\v1\RequisiteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('contact-forms', ContactFormsController::class);
Route::apiResource('currencies', CurrenciesController::class);
Route::apiResource('countries', CountriesController::class);
Route::post('create-order', [OrderController::class, 'store']);
Route::get('delete-order/{orderId}', [OrderController::class, 'destroy']);
Route::post('update-order/{orderId}', [OrderController::class, 'update']);
Route::get('/requisites', [RequisiteController::class, 'show']);

Route::get('users/{userId}', [UserController::class, 'getData']);

