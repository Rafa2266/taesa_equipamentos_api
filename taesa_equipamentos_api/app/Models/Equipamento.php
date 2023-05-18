<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'num_serie',
        'fab',
        'tipo',
        'sub_estacao',
        'sub_estacao',
        'data_entrada_operacao',
        'nivel_tensao',
        'status',
        'obs'
    ];
}
