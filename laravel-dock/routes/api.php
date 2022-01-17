<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Clients;
use App\Http\Controllers\ClientsController;

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




Route::post('/login','App\Http\Controllers\ClientsController@login');
Route::resource('client', 'App\Http\Controllers\ClientsController');
Route::resource('request', 'App\Http\Controllers\Clients_RequesttController');
Route::resource('agents', 'App\Http\Controllers\Clients_AgenttController');
Route::get('/ClientsRequestt/{id}','App\Http\Controllers\Clients_RequesttController@getClientRequest');

Route::prefix('client')->group(function(){
    //Route::get('/',[\App\Http\Controllers\ClientsController::class, 'login']);
    Route::get('/',[\App\Http\Controllers\ClientsController::class, 'showall']);
});

Route::prefix('posts')->group(function(){
   // Route::get('/{id}',[\App\Http\Controllers\Clients_RequesttController::class, 'getTimelinePost']);
    Route::get('/',[\App\Http\Controllers\Clients_RequesttController::class, 'showall']);
});

Route::prefix('agent')->group(function(){
   // Route::get('/{id}',[\App\Http\Controllers\Clients_AgenttController::class, 'getClientAgent']);
    Route::get('/',[\App\Http\Controllers\Clients_AgenttController::class, 'showall']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
