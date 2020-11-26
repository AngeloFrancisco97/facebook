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
    Route::get('/', [App\Http\Controllers\HomeController::class]);
    Auth::routes();
});
Auth::routes();
Route::get('/',[App\Http\Controllers\PublicacoesController::class, 'index'])->name('publicacoes');
Route::post('/cadastrar_publicacao',[App\Http\Controllers\PublicacoesController::class, 'cadastrar_publicacao'])->name('cadastrar_publicacao');
Route::get('/perfil/',[App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::post('/adicionar_amigo',[App\Http\Controllers\PerfilController::class, 'adicionar_amigo'])->name('adicionar_amigo');
Route::post('/editar_perfil',[App\Http\Controllers\PerfilController::class, 'editar_perfil'])->name('editar_perfil');
