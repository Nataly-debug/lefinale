<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedeController;




Route::get('/', [HospedeController::class,'index'])->name('hospedes');

Route::get('/hospede/{id}', [HospedeController::class,'show'])->name('hospedes_show');

//Route::get('/hospede/{id}',[HospedeController::class, 'destroy'])->name('hospede_delete');

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

Route::get('/hospede',function(){
    return view('hospede');
});

Route::get('/hospede_show',function(){
    return view('hospede_show');
});
