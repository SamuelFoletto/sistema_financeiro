<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposCobrancas extends Model
{
    use SoftDeletes;
    protected $table = 'tipos_cobrancas';
    protected $fillable = [
        'nome',
    ];

    public function movimentacao(){
        return $this->hasMany(Movimentacao::class);
    }

    public function categoria()
    {
        return $this->hasMany(Categoria::class);
    }
}
