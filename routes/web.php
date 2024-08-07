<?php

use Illuminate\Support\Facades\Route;
use  App\Https\Controllers\TareaControllers;

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

Route::get('/tarea', function () {
    return view('tarea.index');
});

Route::get('/tarea/create', [TareaController::class, 'create']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
