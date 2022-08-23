<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;

Route::get('/', [LoginController::class, 'login'])->name('pagina.login');

Route::get('/cadastro', [LoginController::class, 'cadastro'])->name('pagina.cadastro');

Route::post('/cadastrar', [LoginController::class, 'cadastrar']);

Route::post('/logar', [LoginController::class, 'logar']);

Route::group(['middleware' => 'auth'], function () {

	Route::resource('cliente', ClienteController::class);

	Route::post('/cliente/{id}/update', [ClienteController::class, 'update'])->name('cliente.editar');

	Route::get('/cliente/{id}/del', [ClienteController::class, 'destroy']);

	Route::get('/logout', [LoginController::class, 'logout']);

});

Route::get('/email', [LoginController::class, 'teste'])->name('pagina.teste');