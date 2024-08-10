<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
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

Route::middleware('auth:sanctum')->group( function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
     Route::post('/logout', [AuthController::class, 'logout']);  

     Route::post('/post', [PedidoController::class, 'store']);
     Route::get('/pedidos', [PedidoController::class, 'index']);
});
 

Route::get('/categorias', [CategoriaController::class, 'index']);

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::post('/registro', [AuthController::class, 'registro']);
Route::post('/login', [AuthController::class, 'login']);
