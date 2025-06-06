<?php

namespace App\Services;

use App\Repositories\RastreamentoPedidoRepositoryInterface;

class RastreamentoPedidoService
{

    protected RastreamentoPedidoRepositoryInterface $rastreamentoPedidoRepository;

    public function __construct(RastreamentoPedidoRepositoryInterface $rastreamentoPedidoRepository) {
        $this->rastreamentoPedidoRepository = $rastreamentoPedidoRepository;
    }

    public function execute() {
        return ['rastreamento_pedidos' => $this->rastreamentoPedidoRepository->buscaRastreamentoPedidos()];
    }

}
