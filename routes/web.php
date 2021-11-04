<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HospedeController;

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
Route::get('/retorno', function () {
    return view('retorno');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro',function(){
    return view('cadastro');
});

Route::get('/recuperar',function(){
    return view('recuperar');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/servicos',function(){
    return view('servicos');
});

Route::get('/reservas',function(){
    return view('reservas');
});

Route::get('/apresentacao',function(){
    return view('apresentacao');

})->name('apresentacao');

Route::get('/', [HospedeController::class,'index'])->name('hospedes');