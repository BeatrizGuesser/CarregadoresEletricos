<?php

use App\Http\Controllers\CarregadoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('teste', function () {
    return "Deu cccccccccccccbbbbbbbb";
});

Route::post('cadastrar-carregador', [CarregadoresController::class, 'criarCarregador']);

Route::get('ver-todos-carregador', [CarregadoresController::class, 'verTodosCarregador']);

Route::put('atualizar-carregador', [CarregadoresController::class, 'editarCarregador']);

Route::delete('deletar-carregador', [CarregadoresController::class, 'apagarCarregador']);