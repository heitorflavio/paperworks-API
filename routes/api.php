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

Route::get('/produtos', 'ProdutosController@index');
Route::get('/produtos/cliente/', 'ProdutosController@produtos');
Route::get('/produtos/{id}', 'ProdutosController@show');
Route::put('/produtos/{id}', 'ProdutosController@update');
Route::delete('/produtos/status/{id}', 'ProdutosController@destroy');
Route::post('/produtos/status/{id}', 'ProdutosController@active');
Route::post('/produtos', 'ProdutosController@store');

Route::get('/imagens', 'ImagensController@index');
Route::get('/imagens/{id}', 'ImagensController@show');
Route::post('/imagens', 'ImagensController@store');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

