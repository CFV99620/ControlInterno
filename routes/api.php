<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ClienteController::class)->group(function () {
    Route::get('/test', 'test')->name('cliente.test');
    Route::post('/create', 'store')->name('cliente.create');

});


//Route::get('/test', [ClienteController::class, 'test'])->name('cliente.test');
