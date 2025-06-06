<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetaEntrega extends Model
{
    use HasFactory;

    protected $table = 'etiquetas_entrega';

    protected $fillable = [
        'vendedor_id',
        'transportadora_id',
        'pedido_id',
        'data_envio',
    ];
}
