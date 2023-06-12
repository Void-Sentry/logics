<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargas extends Model
{
    use HasFactory;

    protected $with = ['pedidos'];

    protected $fillable = ['descricao'];

    public function pedidos(): HasMany {
        return $this->hasMany(pedido_items::class, 'carga_id', 'id');
    }
}
