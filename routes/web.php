<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/todos/index','TodosController@index');
Route::get('/todos/create','TodosController@showCreateForm');
Route::post('/todos/create','TodosController@store');
Route::get('/todos/delete/{id}','TodosController@destroy');
Route::get('/todos/show/{id}','TodosController@show');
Route::get('/todos/edit/{id}','TodosController@edit');
Route::post('/todos/update/{id}','TodosController@update');
Route::post('/todos/do/{id}','TodosController@do');
