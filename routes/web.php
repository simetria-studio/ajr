<?php

use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\DetalheConvinioController;
use App\Http\Controllers\icmsinternaController;
use App\Http\Controllers\InterestadualController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SubstituicaoTributariaController;
use App\Http\Controllers\TesteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produto;

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



Auth::routes();

Route::get('teste', [TesteController::class, 'index'])->name('teste');

Route::get('/', function () {
    return view('index');
});

 

Route::get('/dashboard', [ProdutoController::class, 'index'])->name('dashboard');
Route::get('/dashboard/create', [ProdutoController::class, 'create']);  
Route::post('/products', [ProdutoController::class, 'store']);





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/icms-interna', [icmsinternaController::class, 'index'])->name('icms-interna');
Route::get('/icms-interestadual', [InterestadualController::class, 'index'])->name('icms-interestadual');
Route::get('/substituicao-tributaria', [SubstituicaoTributariaController::class, 'index'])->name('substituicao-tributaria');
Route::get('/convenio', [ConvenioController::class, 'index'])->name('convenio');
Route::get('/convenio/detalhes', [DetalheConvinioController::class, 'index'])->name('detalhes');
