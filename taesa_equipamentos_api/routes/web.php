<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\EquipamentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('equipamentos')->group(function () {
    Route::get('/',[ EquipamentoController::class, 'index']);
    Route::post('/create',[ EquipamentoController::class, 'store']);
    Route::delete('/{id}',[ EquipamentoController::class, 'delete']);
    Route::get('/{id}',[ EquipamentoController::class, 'edit']);
    Route::put('/{id}',[ EquipamentoController::class, 'update']);
});

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/',[EquipamentoController::class,'index']);
Route::get('/edit/${id}',[EquipamentoController::class,'edit']);
Route::post('/create',[EquipamentoController::class,'store']);
Route::put('/update/${id}',[EquipamentoController::class,'update']);
Route::delete('/delete/${id}',[EquipamentoController::class,'delete']); */
