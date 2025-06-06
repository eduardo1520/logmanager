<?php

namespace App\Services;

use App\Repositories\EtiquetasEntregaRepository;

class EtiquetasEntregaService
{

    private EtiquetasEntregaRepository $etiquetaEntregaRepository;

    public function __construct(EtiquetasEntregaRepository $etiquetaEntregaRepository) {
        $this->etiquetaEntregaRepository = $etiquetaEntregaRepository;
    }

    public function execute() {
        return $this->etiquetaEntregaRepository->buscaEtiquetasEntrega();
    }

    public function buscaPedidosRecentes() {
        return [
            'vendedor' => 'joao', 'produto' => 'etiqueta01', 'valor_total' => 2500,
            'vendedor' => 'maria', 'produto' => 'etiqueta03', 'valor_total' => 3000,
            'vendedor' => 'silva', 'produto' => 'etiqueta02', 'valor_total' => 5000,
        ];
    }
}
