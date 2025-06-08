<?php

namespace App\Repositories;

use App\Models\Transportadora;
use Illuminate\Database\Eloquent\Builder;

class TransportadoraRepository implements TransportadoraRepositoryInterface
{

    /**
     * Obtém a contagem de pedidos agrupados por status.
     *
     * @return \Illuminate\Support\Builder
     */
    public function buscaTransportadoras(): Builder {
        return Transportadora::query();
    }

}
