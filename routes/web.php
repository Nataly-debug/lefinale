<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedeController;




Route::get('/', [HospedeController::class,'index'])->name('hospedes');

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

