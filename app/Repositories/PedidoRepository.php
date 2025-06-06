<?php

namespace App\Repositories;

use App\Models\Pedido; // Importe o modelo Pedido
use App\Enums\StatusEtiquetaEntrega;

class PedidoRepository implements PedidoRepositoryInterface, RastreamentoPedidoRepositoryInterface
{

    /**
     * Obtém a contagem de pedidos agrupados por status.
     *
     * @return \Illuminate\Support\Collection
     */
    public function buscaPedidosRecentes(): array {
        $pedidos = Pedido::select('vendedores.nome as vendedor','produto','pedidos.valor_total','etiquetas_entrega.data_envio')
                ->join('vendedores', 'pedidos.vendedor_id', '=', 'vendedores.id')
                ->join('etiquetas_entrega', 'pedidos.id', '=', 'etiquetas_entrega.pedido_id')
                ->orderBy('pedidos.created_at', 'desc')
                ->get();

        return $pedidos->map(function ($pedido) {
            return [
                'vendedor'    => $pedido->vendedor,
                'produto'     => $pedido->produto,
                'valor_total' => $pedido->valor_total,
                'status'      => StatusEtiquetaEntrega::fromDataEnvio($pedido->data_envio)->value
            ];
        })->toArray();
    }

    public function buscaRastreamentoPedidos(): array
    {
        $pedidos = Pedido::select('pedidos.id as pedido','pedidos.created_at as data','transportadoras.nome as transportadora','etiquetas_entrega.data_envio')
        ->join('etiquetas_entrega', 'pedidos.id', '=', 'etiquetas_entrega.pedido_id')
        ->join('transportadoras', 'etiquetas_entrega.transportadora_id', '=', 'transportadoras.id')
        ->get();

        return $pedidos->map(function ($rastreamento) {
            return [
                'pedido'         => $rastreamento->pedido,
                'data'           => $rastreamento->data_envio,
                'transportadora' => $rastreamento->transportadora,
                'status'         => StatusEtiquetaEntrega::fromDataEnvio($rastreamento->data_envio)->value
            ];
        })->toArray();
    }

}
