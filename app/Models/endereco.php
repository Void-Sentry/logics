<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'cidade',
        'bairro',
        'numero',
        'rota_id'
    ];

    public function rotas(): HasOne {
        return $this->hasOne('rotas');
    }
}
