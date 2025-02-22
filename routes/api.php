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
//created crud  api
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get
Route::get('/',[\App\Http\Controllers\ApiController::class,'index']);
//post
Route::post('/post',[\App\Http\Controllers\ApiController::class,'post']);
//put
Route::put('/put/{id}',[\App\Http\Controllers\ApiController::class,'put']);
//delete
Route::delete('/delete/{id}',[\App\Http\Controllers\ApiController::class,'delete']);
