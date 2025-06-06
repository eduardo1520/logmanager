<?php

namespace App\Usecases;

use App\Services\RastreamentoPedidoService;

class BuscaRastreamentoPedidos
{
    private RastreamentoPedidoService $rastreamentoPedidoService;

    public function __construct(RastreamentoPedidoService $rastreamentoPedidoService) {
        $this->rastreamentoPedidoService = $rastreamentoPedidoService;
    }

    public function execute() {
        $rastreamentoPedidos = $this->rastreamentoPedidoService->execute();
        return $rastreamentoPedidos;
    }
}
