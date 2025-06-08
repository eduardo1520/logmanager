<?php

namespace App\Repositories;

use Illuminate\Contracts\Database\Eloquent\Builder;

interface TransportadoraRepositoryInterface
{
    public function buscaTransportadoras(): Builder;
}
