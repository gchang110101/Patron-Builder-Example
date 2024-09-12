<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ProductController;


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

Route::apiResource('computers', ComputerController::class);

Route::post('/clothing-products', [ProductController::class, 'storeClothingProduct']); // Crear producto de ropa
Route::post('/electronic-products', [ProductController::class, 'storeElectronicProduct']); // Crear producto electrónico

Route::post('/clothing-products/{id}/clone', [ProductController::class, 'cloneClothingProduct']); // Clonar producto de ropa
Route::post('/electronic-products/{id}/clone', [ProductController::class, 'cloneElectronicProduct']); // Clonar producto electrónico