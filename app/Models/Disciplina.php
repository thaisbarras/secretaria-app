<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'disciplina',
        'curso',
        'obrigatoria',
        'formacao',
        'creditos',
        'chs',
        'chp',
        'periodo',
        'unidade',
        'tipo_aprovacao',
    ];
}
