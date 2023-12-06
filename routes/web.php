<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequisicoeController;
use Illuminate\Support\Facades\Route;

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

//rota da requisicao
Route::get('/requisicao',[RequisicoeController::class,'index'])->name('site.home');
//entregar os dados o usuario ao controller de login para efectuar a respectiva autenticacao
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class, 'logout'])->name('login.logout');
//visualizar a pagina de login
Route::view('/login', 'autenticacao.login')->name('autenticacao.login');
