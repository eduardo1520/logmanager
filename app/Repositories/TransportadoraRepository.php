<?php

namespace App\Repositories;

use App\Models\Transportadora;

class TransportadoraRepository implements TransportadoraRepositoryInterface
{

    /**
     * Obtém a contagem de pedidos agrupados por status.
     *
     * @return \Illuminate\Support\Collection
     */
    public function buscaTransportadoras(): array {
        $transportadoras = Transportadora::all();
        return $transportadoras->toArray();
    }

}
