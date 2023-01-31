<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlePlacaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/cliente/{id}', function ($id) {
    return ControlePlacaController::buscarCliente($id);
});

Route::get('/consulta/final-placa/{numero}', function ($numero) {
    return ControlePlacaController::consultarFinalPlaca($numero);
});

Route::delete('/cliente/{id}', function ($id) {
    return ControlePlacaController::delete($id);
});

Route::put('/cliente/{id}', function (Request $request, $id) {
    return ControlePlacaController::alterar($request, $id);
});

Route::post('/clienteCadastro', function (Request $request) {
    return ControlePlacaController::cadastrarCliente($request);
});
