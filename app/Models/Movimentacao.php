<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimentacao extends Model
{
    use SoftDeletes;
    protected $table = 'movimentacoes';
    protected $fillable = [
        'nome',
        'conta_id',
        'categoria_id',
        'tipo_id',
        'parcela',
        'total_parcelas',
        'valor',
        'descricao',
        'data',
    ];

    public function conta(){
        return $this->belongsTo(Conta::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }


}
