<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Theme\LanguageController;
use App\Http\Controllers\SnakeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/snake', [SnakeController::class, 'index'])->name('snake.index');



Route::get('lang/{locale}', [LanguageController::class, 'setLocale'])->name('lang.switch');
