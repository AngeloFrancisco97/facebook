<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
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

/*Route::get('/', function () {
    return view('welcome');
});/*/
Route::group(['middlewere'], function(){
    Route::get('/t', [App\Http\Controllers\HomeController::class]);
    Auth::routes();
    Route::get('/t', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/',[App\Http\Controllers\PublicacoesController::class, 'index'])->name('publicacoes');
Route::post('/cadastrar_publicacao',[App\Http\Controllers\PublicacoesController::class, 'cadastrar_publicacao'])->name('cadastrar_publicacao');