<?php

namespace App\Usecases;

use App\Services\TransportadoraService;

class BuscaTransportadoras
{
    private TransportadoraService $transportadoraService;

    public function __construct(TransportadoraService $transportadoraService) {
        $this->transportadoraService = $transportadoraService;
    }

    public function execute() {
        $transportadoras = $this->transportadoraService->execute();
        return $transportadoras;
    }
}
