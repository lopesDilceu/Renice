<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TelefoneController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItemVendaController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ItemCarrinhoController;

Route::get('/', function () {
    return view('welcome');
});

// Define rotas RESTful para cada controlador
Route::resource('usuarios', UsuarioController::class);
Route::resource('telefones', TelefoneController::class);
Route::resource('enderecos', EnderecoController::class);
Route::resource('logins', LoginController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('vendas', VendaController::class);
Route::resource('itensvendas', ItemVendaController::class);
Route::resource('avaliacoes', AvaliacaoController::class);
Route::resource('estoques', EstoqueController::class);
Route::resource('compras', CompraController::class);
Route::resource('carrinhos', CarrinhoController::class);
Route::resource('itenscarrinhos', ItemCarrinhoController::class);

// Rotas para o LoginController
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rota para o dashboard
Route::get('/homePage', function () {
    return view('perfis.usuario.homePage');
})->middleware(['auth'])->name('homePage');