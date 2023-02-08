<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetalheConvinioController;
use App\Http\Controllers\SubstituicaoTributariaController;


Auth::routes();
Route::prefix('/')->group(function () {
    //Site
    Route::get('/', function () {
        return view('site.index');
    });
    Route::get('/icms-interna', [CalculadoraController::class, 'index'])->name('icms-interna');
    Route::get('/icms-interestadual', [CalculadoraController::class, 'interestadual'])->name('icms-interestadual');
    Route::get('/substituicao-tributaria', [SubstituicaoTributariaController::class, 'index'])->name('substituicao-tributaria');
    Route::get('/convenio', [ConvenioController::class, 'index'])->name('convenio');
    Route::get('/convenio/detalhes/{id}', [DetalheConvinioController::class, 'index'])->name('detalhes');
    Route::get('/estados', function () {
        return view('site.newstep');
    })->name('estados');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    //dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    //Produtos
    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/produtos/create', [ProdutoController::class, 'create']);
    Route::get('/produtos/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
    Route::post('/produtos', [ProdutoController::class, 'store']);
    Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
    Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit']);
    Route::put('/produtos/update/{id}', [ProdutoController::class, 'update']);
    Route::post('/produtos/delete/', [ProdutoController::class, 'destroy'])->name('produto.delete');
    Route::get('/produto/create-info', [ProdutoController::class, 'createInfo'])->name('info.create');
    Route::post('/produto/store-info', [ProdutoController::class, 'storeInfo'])->name('info.store');
    //Estado
    // Route::get('/estado', [EstadoController::class, 'index'])->name('estados.index');
    // Route::get('/estado/create', [EstadoController::class, 'create'])->name('estados.create');
    // Route::post('/estado/store', [EstadoController::class, 'store'])->name('estados.store');
    //Users
    Route::get('/users', [UsersController::class, 'index'])->name('usuarios');
});


Route::get('teste', [TesteController::class, 'index'])->name('teste');
Route::get('/teste', [ProdutoController::class, 'teste'])->name('teste');
Route::get('/teste2', [ProdutoController::class, 'teste2'])->name('teste2');
Route::post('info-produto-render', [DetalheConvinioController::class, 'filtroEstado'])->name('info.produto.render');
