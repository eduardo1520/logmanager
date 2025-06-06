<?php

namespace App\Usecases;

use App\Services\EtiquetasEntregaService;

class BuscaEtiquetas
{
    private EtiquetasEntregaService $etiquetasEntregaService;

    public function __construct(EtiquetasEntregaService $etiquetasEntregaService) {
        $this->etiquetasEntregaService = $etiquetasEntregaService;
    }

    public function execute() {
        $pedidos = $this->etiquetasEntregaService->execute();
        return $pedidos;
    }
}
