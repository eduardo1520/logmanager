<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    use HasFactory;

    protected $table = 'transportadoras';

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'telefone',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function etiquetasEntrega() {
        return $this->hasMany(EtiquetaEntrega::class);
    }

}
