<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class pedido_items extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_item',
        'id_pedido',
        'cliente',
        'quantidade',
        'descricao',
        'peso'
    ];

    public function endereco(): HasOne {
        return $this->hasOne('endereco');
    }
}
