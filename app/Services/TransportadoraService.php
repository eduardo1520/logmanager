<?php

namespace App\Services;

use App\Repositories\TransportadoraRepositoryInterface;

class TransportadoraService
{

    protected TransportadoraRepositoryInterface $transportadoraRepository;

    public function __construct(TransportadoraRepositoryInterface $transportadoraRepository) {
        $this->transportadoraRepository = $transportadoraRepository;
    }

    public function execute() {
        return ['transportadoras' => $this->transportadoraRepository->buscaTransportadoras()];
    }

}
