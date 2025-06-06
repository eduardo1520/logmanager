<?php

namespace App\Repositories;

use App\Models\Pedido; // Importe o modelo Pedido
use Illuminate\Support\Facades\DB;

class PedidoRepository
{

    /**
     * Obtém a contagem de pedidos agrupados por status.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getPedidosCountByStatus()
    {
        return Pedido::select('status', DB::raw('count(*) as total'))
                      ->groupBy('status')
                      ->get();
    }
}
