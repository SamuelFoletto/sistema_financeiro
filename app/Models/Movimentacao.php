<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimentacao extends Model
{
    use SoftDeletes;
    protected $table = 'movimentacoes';
    protected $fillable = [
        'conta_id',
        'categoria_id',
        'tipo_id',
        'valor',
        'descricao',
        'data',
    ];
}
