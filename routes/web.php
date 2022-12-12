<?php

use App\Http\Controllers\icmsinternaController;
use App\Http\Controllers\InterestadualController;
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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/icms-interna', [icmsinternaController::class, 'index'])->name('icms-interna');
Route::get('/icms-interestadual', [InterestadualController::class, 'index'])->name('icms-interestadual');
