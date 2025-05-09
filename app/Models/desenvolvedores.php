<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desenvolvedores extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'imagem',
        'descricao',
        'data_de_lancamento',
        'especialidade',      
   ];
}
