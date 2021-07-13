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
Route::get('/index', function () {
    return view('index');
});

Route::get('/register', [App\Http\Controllers\CustomerController::class, 'register']);

Route::post('/register', [App\Http\Controllers\CustomerController::class, 'processRegister']);

Route::get('/data-handle/{id}/path', [App\Http\Controllers\DataHandleController::class, 'handlePathVariable']);

Route::get('/data-handle/quey-string', [App\Http\Controllers\DataHandleController::class, 'handleQueryString']);

Route::get('data-handle/form', [App\Http\Controllers\DataHandleController::class, 'handleForm']);

Route::post('data-handle/form', [App\Http\Controllers\DataHandleController::class, 'processForm']);
