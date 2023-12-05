<?php

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
