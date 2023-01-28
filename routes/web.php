<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\UsuarioController;
use App\Models\Servico;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [LoginController::class, 'showLoginForm']);


Auth::routes();

Route::middleware('auth')->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('usuarios', UsuarioController::class);
    Route::resource('servicos', ServicoController::class);

    // // Rotas para trabalhar com serviços
    // Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
    // Route::get('/servicos/create',[ServicoController::class, 'create'])->name('servicos.create');
    // Route::post('/servicos',[ServicoController::class, ''])->name('servicos.');
    // Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
    // Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');
});

