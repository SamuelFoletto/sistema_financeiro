<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conta extends Model
{
    use SoftDeletes;
    protected $table = 'contas';
    protected $fillable = [
        'nome',
        'saldo'
    ];

    public function movimentacao(){
        return $this->hasMany(Movimentacao::class);
    }
}
