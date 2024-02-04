<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::middleware(['autenticado', 'log.acesso'])->prefix('/app')->group(function () {

    Route::get('/produtos', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produtos');
    Route::get('/produtos/novo', [App\Http\Controllers\ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/produtos', [App\Http\Controllers\ProdutoController::class, 'store'])->name('produtos.store');
    Route::post('/produtos/{id}', 'App\Http\Controllers\ProdutoController@update');
    Route::get('/produtos/apagar/{id}', [App\Http\Controllers\ProdutoController::class, 'destroy'])->name('produtos.destroy');
    Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ProdutoController@edit');
    Route::post('/produtos/editar/{id}', 'App\Http\Controllers\ProdutoController@update');
    
    Route::get('/lista-fornecedor', 'App\Http\Controllers\ListaFornecedorController@index');
    Route::get('/fornecedor/novo', [FornecedorController::class, 'create'])->name('fornecedor.create');
    Route::post('/fornecedor/novo', [FornecedorController::class, 'store'])->name('fornecedor.store');

    Route::middleware(['autenticacao', 'auth', 'role:diretor'])->group(function () {
        Route::get('/diretor', [App\Http\Controllers\DiretorController::class, 'index'])->name('app.diretor');
      
    });
    Route::middleware(['autenticacao', 'auth', 'role:fornecedor'])->group(function () {
        Route::get('/fornecedor', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedor');
  
    });
});

