<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'descricao',
        'capacidade',
        'usuario_id'
    ];

    public function usuario(): HasOne {
        return $this->hasOne('User');
    }
}
