<?php

namespace App\Usecases;

use App\Services\EtiquetasEntregaService;

class BuscaEtiquetasEntrega
{
    private EtiquetasEntregaService $etiquetasEntregaService;

    public function __construct(EtiquetasEntregaService $etiquetasEntregaService) {
        $this->etiquetasEntregaService = $etiquetasEntregaService;
    }

    public function execute() {
        $etiquetasEntrega = $this->etiquetasEntregaService->execute();
        return $etiquetasEntrega;
    }
}
