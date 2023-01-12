<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\icmsinternaController;
use App\Http\Controllers\InterestadualController;
use App\Http\Controllers\DetalheConvinioController;
use App\Http\Controllers\SubstituicaoTributariaController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard/produtos', [ProdutoController::class, 'index'])->name('produtos')->middleware('auth');
Route::get('/dashboard/produtos/create', [ProdutoController::class, 'create'])->middleware('auth');
Route::get('/dashboard/produtos/{id}', [ProdutoController::class, 'show'])->middleware('auth');
Route::post('/dashboard/produtos', [ProdutoController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/produtos/{id}', [ProdutoController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/produtos/edit/{id}', [ProdutoController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/produtos/update/{id}', [ProdutoController::class, 'update'])->middleware('auth');

Route::get('/dashboard/users', [UsersController::class, 'index'])->name('usuarios')->middleware('auth');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/icms-interna', [icmsinternaController::class, 'index'])->name('icms-interna');
Route::get('/icms-interestadual', [InterestadualController::class, 'index'])->name('icms-interestadual');
Route::get('/substituicao-tributaria', [SubstituicaoTributariaController::class, 'index'])->name('substituicao-tributaria');
Route::get('/convenio', [ConvenioController::class, 'index'])->name('convenio');
Route::get('/convenio/detalhes/{id}', [DetalheConvinioController::class, 'index'])->name('detalhes');
