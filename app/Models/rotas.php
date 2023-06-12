<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class rotas extends Model
{
    use HasFactory;

    protected $with = ['enderecos'];

    protected $fillable = [
        'descricao',
        'veiculo_id'
    ];

    public function enderecos(): HasMany {
        return $this->hasMany(endereco::class, 'rota_id', 'id');
    }

    public function veiculos(): HasMany {
        return $this->hasMany('veiculos');
    }
}
