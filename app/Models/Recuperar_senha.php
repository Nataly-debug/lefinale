<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recuperar_senha extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'resposta_pergunta',
    ];
}
