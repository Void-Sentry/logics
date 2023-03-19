<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class rotas extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'cidade',
        'bairro'
    ];

    public function veiculos(): HasMany {
        return $this->hasMany('veiculos');
    }
}
