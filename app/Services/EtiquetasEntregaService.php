<?php

namespace App\Services;

use App\Repositories\EtiquetaEntregaRepositoryInterface;
use App\Repositories\PedidoRepositoryInterface;

class EtiquetasEntregaService
{

    protected EtiquetaEntregaRepositoryInterface $etiquetaEntregaRepository;
    protected PedidoRepositoryInterface $pedidoRepository;

    public function __construct(EtiquetaEntregaRepositoryInterface $etiquetaEntregaRepository, PedidoRepositoryInterface $pedidoRepository) {
        $this->etiquetaEntregaRepository = $etiquetaEntregaRepository;
        $this->pedidoRepository = $pedidoRepository;
    }

    public function execute() {
        return [
            'etiquetas' => $this->etiquetaEntregaRepository->buscaEtiquetasEntrega(),
            'pedidos' => $this->pedidoRepository->buscaPedidosRecentes()
        ];
    }

}
