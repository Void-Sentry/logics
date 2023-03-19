<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class entregas extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'carga_id',
        'veiculo_id'
    ];

    public function cargas(): HasMany {
        return $this->hasMany('cargas');
    }

    public function vaiculo(): HasOne {
        return $this->hasOne('veiculos');
    }
}
