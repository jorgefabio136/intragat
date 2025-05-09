<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atividades extends Model
{
    use HasFactory;

    
    
    protected $fillable = [
        'nome',
        'tipo',
        'pdf',
        'descricao',
        'data_de_lancamento',
        'repo',      
   ];
}
