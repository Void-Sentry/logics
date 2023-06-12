<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class entregas extends Model
{
    use HasFactory;

    protected $with = ['cargas', 'rota'];

    protected $fillable = [
        'descricao',
        'carga_id',
        'veiculo_id'
    ];

    protected $hidden = [
        'carga_id',
        'veiculo_id'
    ];

    public function cargas(): HasMany {
        return $this->hasMany(cargas::class, 'id', 'carga_id');
    }

    public function veiculo(): HasOne {
        return $this->hasOne(veiculo::class, 'id', 'veiculo_id');
    }

    public function rota(): HasOne {
        return $this->hasOne(rotas::class, 'veiculo_id', 'veiculo_id');
    }
}
