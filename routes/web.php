<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EstadoController;
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

Route::get('/dashboard/produtos', [ProdutoController::class, 'index'])->name('produto.index')->middleware('auth');
Route::get('/dashboard/produtos/create', [ProdutoController::class, 'create'])->middleware('auth');
Route::get('/dashboard/produtos/show/{id}', [ProdutoController::class, 'show'])->name('produto.show')->middleware('auth');
Route::post('/dashboard/produtos', [ProdutoController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/produtos/{id}', [ProdutoController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/produtos/edit/{id}', [ProdutoController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/produtos/update/{id}', [ProdutoController::class, 'update'])->middleware('auth');
Route::post('/dashboard/produtos/delete/', [ProdutoController::class, 'destroy'])->name('produto.delete')->middleware('auth');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    //Produtos
    Route::get('/produto/create-info', [ProdutoController::class, 'createInfo'])->name('info.create');
    Route::post('/produto/store-info', [ProdutoController::class, 'storeInfo'])->name('info.store');
    //Estado
    Route::get('/estado', [EstadoController::class, 'index'])->name('estados.index');
    Route::get('/estado/create', [EstadoController::class, 'create'])->name('estados.create');
    Route::post('/estado/store', [EstadoController::class, 'store'])->name('estados.store');

});
Route::get('/dashboard/users', [UsersController::class, 'index'])->name('usuarios')->middleware('auth');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/icms-interna', [icmsinternaController::class, 'index'])->name('icms-interna');
Route::get('/icms-interestadual', [InterestadualController::class, 'index'])->name('icms-interestadual');
Route::get('/substituicao-tributaria', [SubstituicaoTributariaController::class, 'index'])->name('substituicao-tributaria');
Route::get('/convenio', [ConvenioController::class, 'index'])->name('convenio');
Route::get('/convenio/detalhes/{id}', [DetalheConvinioController::class, 'index'])->name('detalhes');

Route::get('/teste', [ProdutoController::class, 'teste'])->name('teste');
Route::get('/teste2', [ProdutoController::class, 'teste2'])->name('teste2');

Route::post('info-produto-render', [DetalheConvinioController::class, 'filtroEstado'])->name('info.produto.render');
