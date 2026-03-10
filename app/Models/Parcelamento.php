<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parcelamento extends Model
{
    use SoftDeletes;
    protected $table = 'parcelamentos';
    protected $fillable = [
        'movimentacao_id',
        'parcelamento_nome',
        'total_parcelas',
        'data_vencimento',
        'valor_total',
    ];
}
