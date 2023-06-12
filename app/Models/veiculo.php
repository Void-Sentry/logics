<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    use HasFactory;

    protected $with = ['entregas'];

    protected $fillable = [
        'placa',
        'descricao',
        'capacidade',
        'usuario_id'
    ];

    public function usuario(): HasOne {
        return $this->hasOne('User');
    }

    public function entregas(): HasMany {
        return $this->hasMany(entregas::class, 'veiculo_id', 'id');
    }
}
