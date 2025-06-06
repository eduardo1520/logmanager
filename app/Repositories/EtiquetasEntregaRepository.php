<?php

namespace App\Repositories;

use App\Models\EtiquetaEntrega;
use Illuminate\Support\Carbon;


class EtiquetasEntregaRepository
{
    public function buscaEtiquetasEntrega(): array
    {
        $hoje = Carbon::today();

        return [
            'pendentes' => EtiquetaEntrega::whereNull('data_envio')->count(),
            'entregues' => EtiquetaEntrega::whereNotNull('data_envio')
                ->whereDate('data_envio', '<=', $hoje)
                ->count(),
            'transito' => EtiquetaEntrega::whereNotNull('data_envio')
                ->whereDate('data_envio', '>', $hoje)
                ->count(),
        ];
    }

}
