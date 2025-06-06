<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'vendedor_id',
        'produto',
        'quantidade',
        'valor_total',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'vendedor_id' => 'integer',
        'quantidade' => 'integer',
        'valor_total' => 'float',
    ];

}
