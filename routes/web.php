<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;


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
    return view('home.home');
});
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/autentic', [LoginController::class, 'authentication'])->name('login.authentication');
Route::get('/cadastro', [CadastroController::class, 'index']);
Route::post('/cadastro/create', [CadastroController::class, 'create'])->name('cadastro.create');

