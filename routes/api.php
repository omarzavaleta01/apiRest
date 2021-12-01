<?php

use Illuminate\Http\Request;
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
//Route para traer todas las categorias 
Route::get('categoria','App\Http\Controllers\categoriacontroller@getCategoria');
//Route para buscar categorias por ID
Route::get('categoria/{id}','App\Http\Controllers\categoriacontroller@getIdCategoria');
//Route para insertar registros en categoria
Route::post('addCategoria','App\Http\Controllers\categoriacontroller@insertCategoria');
//Route para hacer update en los registros de una cateogria
Route::put('updateCategoria/{id}','App\Http\Controllers\categoriacontroller@updateCategoria');
//Rooute para eliminar un registro
Route::delete('deleteCategoria/{id}','App\Http\Controllers\categoriacontroller@deleteCategoria');


//php artisan para correr elprograma en terminal
//prubea