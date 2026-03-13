<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    protected $table = 'categoria';
    protected $fillable = [
        'nome',
        'tipo'
    ];

    public function movimentacao(){
        return $this->hasMany(Movimentacao::class);
    }


}

